<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Pagination\Paginator;
use Illuminate\Contracts\Support\Jsonable;

use App\Category;
use App\SubCatogory;
use App\Auction;
use App\User;
use App\City;
use App\Favouriteauction;

use Carbon\Carbon;
use App\Bidding;
use App\AuctionBidder;
use App\Payment;
use App\AuctionImages;
use Auth;



class AuctionController extends Controller
{
    /**
     * [index description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
	public function index(Request $request)
    {

        if (checkRole(getUserGrade(4))) {
            return redirect(URL_DASHBOARD);
        }
        $sub_categories=[];
        $selected_category=[];

        if (isset($request->category)) {

            $category_record = Category::getRecordWithSlug($request->category);

            if (count($category_record)) {

                $selected_category[] = $category_record->id;

                $sub_categories=[];

                if (isset($request->subcategory)) {

                    $subcategory_record = SubCatogory::getRecordWithSlug($request->subcategory);
                  
                    if (count($subcategory_record)) {

                        $sub_categories = SubCatogory::where('category_id',$category_record->id)
                                                        ->where('id',$subcategory_record->id)
                                                        ->where('status','=','Active')
                                                        ->pluck('id')
                                                        ->toArray();
                    }

                } else {

                    $sub_categories = SubCatogory::where('category_id',$category_record->id)
                                                ->where('status','=','Active')
                                                ->pluck('id')
                                                ->toArray();
                }
            }
          
        } else {
            //Sub Categories
            $sub_categories = $request->sub_categories;
        }
         

        $data['selected_category'] = $selected_category;                                
        $data['selected_sub_categories'] = $sub_categories;


    	$categories = Category::getAuctionPageCategories();
    	$data['categories']     = $categories;


        $cond = [
                    ['auctions.admin_status','=','approved'],
                    ['users.role_id','=',getRoleData('seller')],
                    ['users.approved','=',1],
                    ['categories.status','=','Active'],
                    ['sub_catogories.status','=','Active']
                ];



        //Item type = all_items=All Items,auction_items=Auctions,buynow_items=Buy Now
        $item_type = $request->item_type;

         //Auction Status = open=Live,new=Upcoming,closed=Past
        $auction_status=[];
        $auction_status = $request->auction_status;

        //Auction Date
        $auction_date = $request->auction_date;
        if ($auction_date!='') {
            $auction_date = date('Y-m-d',strtotime($auction_date));
        }
        
        

        //Is Featured
        $featured = $request->featured;

        //Selected Cities
        $selected_cities = $request->selected_cities;


        //Selected Sellers
        $sellers = $request->auction_sellers;


        if ($item_type!='' && count($auction_status)>0) {


           if ($item_type==='auction_items') {
                $cond[] =  ['is_buynow','!=',1];

           } elseif ($item_type==='buynow_items') {
                $cond[] =  ['is_buynow','=',1];
           } 
             

          /* $auctionstatus=[]; 
           foreach ($auction_status as $status) {
                array_push($auctionstatus, "$status");
           }*/
          
           
            


            if ($auction_date!='') {

                $cond[] = ['auctions.start_date','<=',$auction_date];
                $cond[] = ['auctions.end_date','>=',$auction_date];

            } else {

                if ((in_array('open',$auction_status) || in_array('new',$auction_status)) && !in_array('closed',$auction_status)) {
                    $cond[] = ['auctions.start_date','<=',NOW()];
                    $cond[] = ['auctions.end_date','>=',NOW()];

                   /* $cond[] = ['auctions.start_date','<=',DATE("Y-m-d")];
                    $cond[] = ['auctions.end_date','>=',DATE('Y-m-d')];*/
                } 
            }
           
            if ($featured=='true') {
                $cond[] = ['auctions.make_featured','=',1];
            }

              

            if (count($sub_categories)) {

                if (count($selected_cities)) {

                    if (count($sellers)) {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status',
                                  'auctions.start_date','auctions.end_date'])
                        ->where($cond)
                        ->whereIn('auctions.auction_status',$auction_status)
                        ->whereIn('auctions.sub_category_id',$sub_categories)
                        ->whereIn('users.city_id',$selected_cities)
                        ->whereIn('users.id',$sellers)
                        ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);


                    } else {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status',
                                  'auctions.start_date','auctions.end_date'])
                        ->where($cond)
                        ->whereIn('auctions.auction_status',$auction_status)
                        ->whereIn('auctions.sub_category_id',$sub_categories)
                        ->whereIn('users.city_id',$selected_cities)
                        ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }

                } else {

                    if (count($sellers)) {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status',
                                  'auctions.start_date','auctions.end_date'])
                        ->where($cond)
                        ->whereIn('auctions.auction_status',$auction_status)
                        ->whereIn('auctions.sub_category_id',$sub_categories)
                        ->whereIn('users.id',$sellers)
                        ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status',
                                  'auctions.start_date','auctions.end_date'])
                        ->where($cond)
                        ->whereIn('auctions.auction_status',$auction_status)
                        ->whereIn('auctions.sub_category_id',$sub_categories)
                        ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }
                }

            } else {

                if (count($selected_cities)) {

                    if (count($sellers)) {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status',
                                  'auctions.start_date','auctions.end_date'])
                        ->where($cond)
                        ->whereIn('auctions.auction_status',$auction_status)
                        ->whereIn('users.city_id',$selected_cities)
                        ->whereIn('users.id',$sellers)
                        ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.id','auctions.title','auctions.slug',
                                  'auctions.description','auctions.image',
                                  'auctions.reserve_price','auctions.auction_status',
                                  'auctions.start_date','auctions.end_date'])
                        ->where($cond)
                        ->whereIn('auctions.auction_status',$auction_status)
                        ->whereIn('users.city_id',$selected_cities)
                        ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }


                     

                } else {

                    if (count($sellers)) {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.id','auctions.title','auctions.slug',
                                      'auctions.description','auctions.image',
                                      'auctions.reserve_price','auctions.auction_status',
                                      'auctions.start_date','auctions.end_date'])
                            ->where($cond)
                            ->whereIn('auctions.auction_status',$auction_status)
                            ->whereIn('users.id',$sellers)
                            ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.id','auctions.title','auctions.slug',
                                      'auctions.description','auctions.image',
                                      'auctions.reserve_price','auctions.auction_status',
                                      'auctions.start_date','auctions.end_date'])
                            ->where($cond)
                            ->whereIn('auctions.auction_status',$auction_status)
                            ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);


                    }
                   
                }
            }

        } elseif ($item_type!='' && count($auction_status)<=0) {  
           
            if ($auction_date!='') {

                $cond[] = ['auctions.start_date','<=',$auction_date];
                $cond[] = ['auctions.end_date','>=',$auction_date];

            } else { 

                $cond[] = ['auctions.start_date','<=',NOW()];
                $cond[] = ['auctions.end_date','>=',NOW()];

               /* $cond[] = ['auctions.start_date','<=',DATE('Y-m-d')];
                $cond[] = ['auctions.end_date','>=',DATE('Y-m-d')];*/
            }



            if ($item_type==='auction_items') {
                $cond[] =  ['is_buynow','!=',1];

            } elseif ($item_type==='buynow_items') {
                $cond[] =  ['is_buynow','=',1];
            } 

            // $cond[] = ['auctions.auction_status','=','open'];


            if ($featured=='true') {
                $cond[] = ['auctions.make_featured','=',1];
            }

            if (count($sub_categories)) {

                if (count($selected_cities)) {

                     if (count($sellers)) {

                          $auctions = Auction::join('users','auctions.user_id','users.id')
                                    ->join('categories','auctions.category_id','categories.id')
                                    ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                    ->select(['auctions.id','auctions.title','auctions.slug',
                                              'auctions.description','auctions.image',
                                              'auctions.reserve_price','auctions.auction_status',
                                              'auctions.start_date','auctions.end_date'])
                                    ->where($cond)
                                    ->whereIn('auctions.sub_category_id',$sub_catogories)
                                    ->whereIn('users.city_id',$selected_cities)
                                    ->whereIn('users.id',$sellers)
                                    ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                                    ->join('categories','auctions.category_id','categories.id')
                                    ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                    ->select(['auctions.id','auctions.title','auctions.slug',
                                              'auctions.description','auctions.image',
                                              'auctions.reserve_price','auctions.auction_status',
                                              'auctions.start_date','auctions.end_date'])
                                    ->where($cond)
                                    ->whereIn('auctions.sub_category_id',$sub_catogories)
                                    ->whereIn('users.city_id',$selected_cities)
                                    ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }

                } else {

                    if (count($sellers)) {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.id','auctions.title','auctions.slug',
                                      'auctions.description','auctions.image',
                                      'auctions.reserve_price','auctions.auction_status',
                                      'auctions.start_date','auctions.end_date'])
                            ->where($cond)
                            ->whereIn('auctions.sub_category_id',$sub_catogories)
                            ->whereIn('users.id',$sellers)
                            ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.id','auctions.title','auctions.slug',
                                      'auctions.description','auctions.image',
                                      'auctions.reserve_price','auctions.auction_status',
                                      'auctions.start_date','auctions.end_date'])
                            ->where($cond)
                            ->whereIn('auctions.sub_category_id',$sub_catogories)
                            ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    }

                }

            } else {

                if (count($selected_cities)) {

                    if (count($sellers)) {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('users.city_id',$selected_cities)
                                ->whereIn('users.id',$sellers)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('users.city_id',$selected_cities)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }
                    

                } else {

                    if (count($sellers)) {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('users.id',$sellers)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                            $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }
                }
            }

        } elseif ($item_type=='' && count($auction_status)>0) {

            // dd($auction_status);
            //live = auction_staus=open
            //upcoming = auction_status=new
            //past = auction_status=closed
            
            //open
            //new
            //past
            //open,new
            //open,closed
            //new,closed
            //open,new,closed
            

            if ($auction_date!='') {

                $cond[] = ['auctions.start_date','<=',$auction_date];
                $cond[] = ['auctions.end_date','>=',$auction_date];

            } else {

                if ((in_array('open',$auction_status) || in_array('new',$auction_status)) && !in_array('closed',$auction_status)) {

                    $cond[] = ['auctions.start_date','<=',NOW()];
                    $cond[] = ['auctions.end_date','>=',NOW()];

                    /*$cond[] = ['auctions.start_date','<=',DATE("Y-m-d")];
                    $cond[] = ['auctions.end_date','>=',DATE('Y-m-d')];*/

                } 
            }
            


           /* $auctionstatus=[]; 

            foreach ($auction_status as $status) {
                array_push($auctionstatus, "'$status'");
            }*/

            if ($featured=='true') {
                $cond[] = ['auctions.make_featured','=',1];
            }


            if (count($sub_categories)) {

                if (count($selected_cities)) {

                    if (count($sellers)) {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('auctions.auction_status',$auction_status)
                                ->whereIn('auctions.sub_category_id',$sub_categories)
                                ->whereIn('users.city_id',$selected_cities)
                                ->whereIn('users.id',$sellers)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);


                    } else {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('auctions.auction_status',$auction_status)
                                ->whereIn('auctions.sub_category_id',$sub_categories)
                                ->whereIn('users.city_id',$selected_cities)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    }

                } else {

                    if (count($sellers)) {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('auctions.auction_status',$auction_status)
                                ->whereIn('auctions.sub_category_id',$sub_categories)
                                ->whereIn('users.id',$sellers)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('auctions.auction_status',$auction_status)
                                ->whereIn('auctions.sub_category_id',$sub_categories)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }

                }

             } else {

                if (count($selected_cities)) {

                    if (count($sellers)) {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                                    ->join('categories','auctions.category_id','categories.id')
                                    ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                    ->select(['auctions.id','auctions.title','auctions.slug',
                                              'auctions.description','auctions.image',
                                              'auctions.reserve_price','auctions.auction_status',
                                              'auctions.start_date','auctions.end_date'])
                                    ->where($cond)
                                    ->whereIn('auctions.auction_status',$auction_status)
                                    ->whereIn('users.city_id',$selected_cities)
                                    ->whereIn('users.id',$sellers)
                                    ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {

                         $auctions = Auction::join('users','auctions.user_id','users.id')
                                ->join('categories','auctions.category_id','categories.id')
                                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                                ->select(['auctions.id','auctions.title','auctions.slug',
                                          'auctions.description','auctions.image',
                                          'auctions.reserve_price','auctions.auction_status',
                                          'auctions.start_date','auctions.end_date'])
                                ->where($cond)
                                ->whereIn('auctions.auction_status',$auction_status)
                                ->whereIn('users.city_id',$selected_cities)
                                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }

                   

                } else {

                    if (count($sellers)) {

                        $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.id','auctions.title','auctions.slug',
                                      'auctions.description','auctions.image',
                                      'auctions.reserve_price','auctions.auction_status',
                                      'auctions.start_date','auctions.end_date'])
                            ->where($cond)
                            ->whereIn('auctions.auction_status',$auction_status)
                            ->whereIn('users.id',$sellers)
                            ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

                    } else {
                            $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->join('categories','auctions.category_id','categories.id')
                            ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                            ->select(['auctions.id','auctions.title','auctions.slug',
                                      'auctions.description','auctions.image',
                                      'auctions.reserve_price','auctions.auction_status',
                                      'auctions.start_date','auctions.end_date'])
                            ->where($cond)
                            ->whereIn('auctions.auction_status',$auction_status)
                            ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                    }
                }
            }

        } else {
            

            if (isset($request->category)) {

                //Initial loading.. 
                $cond[] = ['auctions.auction_status','=','open'];


                $cond[] = ['auctions.start_date','<=',NOW()];
                $cond[] = ['auctions.end_date','>=',NOW()];

                /*$cond[] = ['auctions.start_date','<=',DATE("Y-m-d")];
                $cond[] = ['auctions.end_date','>=',DATE('Y-m-d')];*/


                 $auctions = Auction::join('users','auctions.user_id','users.id')
                ->join('categories','auctions.category_id','categories.id')
                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                ->select(['auctions.id','auctions.title','auctions.slug',
                          'auctions.description','auctions.image',
                          'auctions.reserve_price','auctions.auction_status',
                          'auctions.start_date','auctions.end_date'])
                ->where($cond)
                ->whereIn('auctions.sub_category_id',$sub_categories)
                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);
                // dd($request->category_id);

            } else {

                //Initial loading.. 
                $cond[] = ['auctions.auction_status','=','open'];

                $cond[] = ['auctions.start_date','<=',NOW()];
                $cond[] = ['auctions.end_date','>=',NOW()];

                /*$cond[] = ['auctions.start_date','<=',DATE("Y-m-d")];
                $cond[] = ['auctions.end_date','>=',DATE('Y-m-d')];*/

                 $auctions = Auction::join('users','auctions.user_id','users.id')
                ->join('categories','auctions.category_id','categories.id')
                ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                ->select(['auctions.id','auctions.title','auctions.slug',
                          'auctions.description','auctions.image',
                          'auctions.reserve_price','auctions.auction_status',
                          'auctions.start_date','auctions.end_date'])
                ->where($cond)
                ->orderBy('auctions.id','desc')->paginate(PAGINATE_RECORDS);

            }
            
        }



        $auctions->withPath(URL_HOME_AUCTIONS);
        
        
        $data['auctions'] = $auctions;
        
       

        $data['active_class']   = 'auctions';
        $data['layout']         = getLayout();
        $data['title']          = getPhrase('auctions');
        $data['breadcrumb']     = TRUE;
                         
        if ($request->ajax()) {

            return view('home.pages.auctions.ajax_auctions', ['auctions' => $auctions])->render();  
        }
        // Auction::paginate(3);
        return view('home.pages.auctions.auctions', $data);
    }

    /**
     * [viewAuction description]
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function viewAuction($slug)
    {
        if (checkRole(getUserGrade(4))) {
            return redirect(URL_DASHBOARD);
        }

        $auction = Auction::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($auction))
            return redirect($isValid);


        $data['auction'] = $auction;


        //bid payment - paid or not
        $bid_payment_record = $auction->getAuctionPayment();
        

        //buy now payment - paid or not
        $buy_now_payment_record = $auction->getBuyNowAuctionPayment();
        
        $bid_div=true;
        if (count($bid_payment_record) || count($buy_now_payment_record)) {
          $bid_div = false;
        }

        $data['bid_div'] = $bid_div;

        
        //minimum_bid,is_bid_increment,bid_increment
        $bid_options=[];
        $today=date('Y-m-d');

        //if last bid there then that is starting amount in options
        $last_bid = Bidding::getLastBidRecord($auction->id);
        $data['last_bid'] = $last_bid;




        //live auction button show condition
        $live_auction=false;
        $live_auction_starts=false;
        
        if ($auction->live_auction_date && $bid_div) {

            if ($auction->admin_status=='approved' && $auction->auction_status=='open' && $auction->live_auction_date==$today) {

              $live_auction_start_time = strtotime($auction->live_auction_start_time);
              $live_auction_end_time   = strtotime($auction->live_auction_end_time);

                if ($live_auction_start_time <= time() && $live_auction_end_time >= time()) {
                  $live_auction=true; //live auction happening currently

                } else if ($live_auction_start_time > time() && $live_auction_end_time > time()) {
                  $live_auction_starts = true;//live auction gonna start 
                }
              }
        }
        
        $data['live_auction'] = $live_auction;
        $data['live_auction_starts'] = $live_auction_starts;

        //if some one already paid auction amount or
        //if some one already purchased 
        //then normal auction and live auction will be not happen.



        if ($auction->admin_status=='approved' && $auction->auction_status=='open' && $auction->start_date<=now() && $auction->end_date>=now()) {
            if ($auction->is_bid_increment && $auction->bid_increment>0) {
                    
                $start = $auction->minimum_bid;

                if (isset($last_bid) && $last_bid->bid_amount) {

                    if ($last_bid->bid_amount >= $start) {
                        $start = $last_bid->bid_amount+$auction->bid_increment;
                    }
                    // $start = $last_bid->bid_amount;
                }

                $increment = $auction->bid_increment;
                $reserve_price = $auction->reserve_price;

                if ($auction->minimum_bid>0) {

                    //options - start from minimum bid
                    // $bid_options[] = $start;
                    
                    for ($i=$start;$i<=($reserve_price+$increment);$i=$i+$increment) {
                        $bid_options[$i] = $i;
                    }
                   
                } else {

                    //options - start from bid_increment amount
                    for ($i=$increment;$i<=($reserve_price+$increment);$i=$i+$increment) {
                        $bid_options[$i] = $i;
                    }
                    
                }
                

            } else {

                if ($auction->minimum_bid>0) {
                    //text - start from minimum bid
                } else {
                    //text - start from 1
                }

            }
        }
        $data['bid_options'] = $bid_options;

        $data['seller'] = User::where('id',$auction->user_id)
                                ->where('role_id',getRoleData('seller'))
                                ->first();

        //bidding history
        //all bidders - name,last recent bid
        // $data['bidding_history'] = $auction->getAuctionBiddingHistory();

        //auctionbidders
        $auctionbidders = AuctionBidder::where('auction_id',$auction->id)
                                        ->select('auctionbidders.id')
                                        ->orderBy('auctionbidders.id','desc')
                                        ->get();

        if (count($auctionbidders)) {
          foreach ($auctionbidders as $ab) {

            $user_last_bid = Bidding::join('auctionbidders', 'bidding.ab_id', 'auctionbidders.id')
                                      ->join('users','auctionbidders.bidder_id','users.id')
                                      ->where('bidding.ab_id',$ab->id)
                                      ->select('users.name','bidding.bid_amount')
                                      ->orderBy('bidding.id','desc')
                                      ->limit(1)
                                      ->get();
            if (count($user_last_bid)) {
              $user_last_bid  = $user_last_bid[0];
              $ab->username   = $user_last_bid->name;
              $ab->bid_amount = $user_last_bid->bid_amount;

            }                          
          }
        }

        $data['bidding_history'] = $auctionbidders;



       

       
        //buynow condition
        $data['is_already_sold'] = 'No';
        if ($auction->is_buynow==1 && $auction->buy_now_price) {

          $buynow_payments = Payment::where('auction_id',$auction->id)
                                ->where('payment_for',PAYMENT_FOR_BUY_AUCTION)
                                ->where('payment_status',PAYMENT_STATUS_SUCCESS)
                                ->get();
          if (count($buynow_payments))                
          $data['is_already_sold'] = 'Yes';                      
        }


        //auction images
        $max_number_of_pictures = getSetting('max_number_of_pictures','auction_settings');
        $auction_images  = AuctionImages::where('auction_id',$auction->id)
                                          ->orderBy('id','desc')
                                          ->limit($max_number_of_pictures)
                                          ->get();

        $data['auction_images'] = $auction_images;


        
        $data['active_class']   = 'auctions';
        $data['layout']         = getLayout();
        $data['title']          = getPhrase('auction_details');
        $data['breadcrumb']     = TRUE;
        return view('home.pages.auctions.auction-details', $data);

    }


    public function liveAuction($slug)
    {
      $timezone = env('SYSTEM_TIMEZONE');
      if (!$timezone)
        $timezone = 'Asia/Kolkata';

        date_default_timezone_set($timezone);

      // $current_time = date('M d Y H:i:s', strtotime(date('Y-m-d H:i:s')));
      // $end_time = date('M d Y H:i:s', strtotime('2018-06-26 18:05:10'));

       

        //check auction date, time
        //if not matches - display message
        //if any one won - same...
        
        if (checkRole(getUserGrade(4))) {
            return redirect(URL_DASHBOARD);
        }

        $auction = Auction::getRecordWithSlug($slug);

        if ($isValid = $this->isValidRecord($auction))
            return redirect($isValid);


        $data['auction'] = $auction;


        //bid payment - paid or not
        $bid_payment_record = $auction->getAuctionPayment();
        

        //buy now payment - paid or not
        $buy_now_payment_record = $auction->getBuyNowAuctionPayment();
        
        $bid_div=true;
        if (count($bid_payment_record) || count($buy_now_payment_record)) {

          $bid_div = false;
          //if already some one bought or some one paid auction amount-don't allow live auction
          flash('info','Some one has already won/bought this auction..','info');
          return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);

        }

        $data['bid_div'] = $bid_div;

        
        //minimum_bid,is_bid_increment,bid_increment
        $bid_options=[];
        $today=date('Y-m-d');

        //if last bid there then that is starting amount in options
        $last_bid = Bidding::getLastBidRecord($auction->id);
        $data['last_bid'] = $last_bid;




        if ($auction->auction_status=='open' && $auction->start_date<=now() && $auction->end_date>=now()) {
            if ($auction->is_bid_increment && $auction->bid_increment>0) {
                    
                $start = $auction->minimum_bid;

                if (isset($last_bid) && $last_bid->bid_amount) {

                    if ($last_bid->bid_amount >= $start) {
                        $start = $last_bid->bid_amount+$auction->bid_increment;
                    }
                    // $start = $last_bid->bid_amount;
                }

                $increment = $auction->bid_increment;
                $reserve_price = $auction->reserve_price;

                if ($auction->minimum_bid>0) {

                    //options - start from minimum bid
                    // $bid_options[] = $start;
                    
                    for ($i=$start;$i<=($reserve_price+$increment);$i=$i+$increment) {
                        $bid_options[$i] = $i;
                    }
                   
                } else {

                    //options - start from bid_increment amount
                    for ($i=$increment;$i<=($reserve_price+$increment);$i=$i+$increment) {
                        $bid_options[$i] = $i;
                    }
                    
                }
                

            } else {

                if ($auction->minimum_bid>0) {
                    //text - start from minimum bid
                } else {
                    //text - start from 1
                }

            }
        }
        $data['bid_options'] = $bid_options;

        $data['seller'] = User::where('id',$auction->user_id)
                                ->where('role_id',getRoleData('seller'))
                                ->first();

        //bidding history
        //get last 5 recent bids
        $data['live_biddings'] = $auction->getAuctionBiddingHistory(5);

        //bidding - last record
        $bidding = Bidding::join('auctionbidders', 'bidding.ab_id', 'auctionbidders.id')
                          ->select('bidding.bid_amount')
                          ->where('auctionbidders.auction_id', $auction->id)
                          ->orderBy('bidding.id','desc')
                          ->limit(1)
                          ->get();

        if (count($bidding)) {
          $bidding = $bidding[0];
          $data['bidding'] = $bidding;
        }                 




        //buynow condition
        $data['is_already_sold'] = 'No';
        if ($auction->is_buynow==1 && $auction->buy_now_price) {

          $buynow_payments = Payment::where('auction_id',$auction->id)
                                ->where('payment_for',PAYMENT_FOR_BUY_AUCTION)
                                ->where('payment_status',PAYMENT_STATUS_SUCCESS)
                                ->get();
          if (count($buynow_payments))                
          $data['is_already_sold'] = 'Yes';                      
        }


        //auction images
        $max_number_of_pictures = getSetting('max_number_of_pictures','auction_settings');
        $auction_images  = AuctionImages::where('auction_id',$auction->id)
                                          ->orderBy('id','desc')
                                          ->limit($max_number_of_pictures)
                                          ->get();

        $data['auction_images'] = $auction_images;






         //live auction button show condition
        $live_auction=false;
        if ($auction->live_auction_date && $bid_div) {

            if ($auction->admin_status=='approved' && $auction->auction_status=='open' && $auction->live_auction_date==$today) {

              $live_auction_start_time = strtotime($auction->live_auction_start_time);
              $live_auction_end_time   = strtotime($auction->live_auction_end_time);

                if ($live_auction_start_time <= time() && $live_auction_end_time >= time()) {
                  $live_auction=true;
                }
              }
        }
        if (!$live_auction) {
          flash('info','Bidding time is not valid..can not place bid now', 'info');
          return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
        }


        //timer end time
        $end_time = date('M d Y H:i:s', strtotime($auction->live_auction_date.' '.$auction->live_auction_end_time));
        $data['end_time']       = $end_time;

        
        $data['active_class']   = 'auctions';
        $data['layout']         = getLayout();
        $data['title']          = getPhrase('live_auction').'::'.$auction->title;
        $data['breadcrumb']     = TRUE;
        return view('home.pages.auctions.live-auction', $data);

    }
    
    public function auctionInfo(Request $request)
    {
        return json_encode(array('auction_id'=>$request->auction_id));
    }


     /**
     * add to favourite auctions list
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function addToFavourite(Request $request)
    {
        if (checkRole(getUserGrade(4))) {

            $response['status'] = 0;
            $response['message'] = getPhrase('user_have_no_rights_to_add_favourites');

            return json_encode($response);
        }

        $user   = \Auth::user();
      
        if ($isValid = $this->isValidRecord($user))
            return redirect($isValid);

        if ($user->role_id != getRoleData('bidder'))
            return redirect(URL_USERS_LOGIN);


        if ($redirect = $this->check_isdemo()) {

            $response['status']  = 0;
            $response['message'] = getPhrase('crud_operations_disabled_in_demo');
            return json_encode($response);
        }

        $existed = Favouriteauction::where('user_id',$user->id)
                                    ->where('auction_id',$request->auction_id)
                                    ->first();

        if ($existed) {

            $response['status'] = 0;
            $response['message'] = getPhrase('auction_already_added_to_favourites');

        } else {
       
            $record     = new Favouriteauction();
            $record->user_id    = $user->id;
            $record->auction_id = $request->auction_id;
          
            $record->save();

            $response['status'] = 1;
            $response['message'] = getPhrase('auction_added_to_favourites');
        }

        return json_encode($response);
    }

    /**
     * [saveBid description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function saveBid(Request $request)
    {
        if (checkRole(getUserGrade(4))) {
            return redirect(URL_DASHBOARD);
        }
        
        $currentUser = \Auth::user();

        $bid_amount  = $request->bid_amount;
        $auction_id  = $request->bid_auction_id;

        $save=FALSE;

        if ($currentUser) {


           if ($redirect = $this->check_isdemo()) {
              flash('info','crud_operations_disabled_in_demo', 'info');
              return redirect($redirect);
            }

            if ($bid_amount && $auction_id) {


                //check is user is bidder
                if ($currentUser->role_id!=getRoleData('bidder')) {
                    flash('error','please_login_as_bidder_to_continue', 'error');
                    return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
                }
              

                //auction record
                $auction_record = Auction::where('id',$auction_id)->get();
                if (count($auction_record))
                  $auction_record = $auction_record[0];

                //live auction condition
                //if live auction happening - regular auction should not work
                $live_auction=false;
                $today = date('Y-m-d');
                if ($auction_record->live_auction_date) {

                    if ($auction_record->admin_status=='approved' && $auction_record->auction_status=='open' && $auction_record->live_auction_date==$today) {

                      $live_auction_start_time= strtotime($auction_record->live_auction_start_time);
                      $live_auction_end_time  = strtotime($auction_record->live_auction_end_time);

                        if ($live_auction_start_time<=time() && $live_auction_end_time>=time()) {
                            $live_auction=true;
                        }
                      }
                }
                if ($live_auction) {
                  flash('info','Live auction happening currently..can not perform regular auction', 'info');
                  return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction_record->slug);
                }






                //check auction start,end date-time,auction status
                $auction = Auction::getAuctionRecord($auction_id);

                if (!empty($auction)) {

                  //check already someone paid auction amount/bought auction
                  //bid payment - paid or not
                  $bid_payment_record = $auction->getAuctionPayment();
                  
                  //buy now payment - paid or not
                  $buy_now_payment_record = $auction->getBuyNowAuctionPayment();
                  
                  $bid_div=true;
                  if (count($bid_payment_record) || count($buy_now_payment_record)) {

                    $bid_div = false;

                    flash('info','Some one has already won/bought this auction..','info');
                    return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
                  }





                    //start date time,end date time
                    $now = strtotime(date('Y-m-d H:i:s'));
                    $start_date = strtotime($auction->start_date);
                    $end_date   = strtotime($auction->end_date);

                    if ($start_date<=$now && $end_date>=$now) {

                        //check last recent bid
                        $last_bid = Bidding::getLastBidRecord($auction->id);

                        if (!empty($last_bid)) {

                            if ($bid_amount>$last_bid->bid_amount) {
                                //save in table
                                $save=TRUE;
                            } else {
                                //redirect - bid amount is not valid
                                flash('error','bid_amount_is_not_valid', 'error');
                                return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
                            }
                            
                        } elseif ($auction->minimum_bid>0) {

                            //if not last recent bid, check auction minimum amount
                            
                            //1st bid
                            if ($bid_amount>=$auction->minimum_bid) {
                                //save in table
                                $save=TRUE;
                            } else {
                                //redirect - bid amount is not valid
                                flash('error','bid_amount_is_not_valid', 'error');
                                return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
                            }

                        } elseif (empty($last_bid) && $auction->minimum_bid<=0) {
                            //1st bid
                            //save in table
                            $save=TRUE;

                        } else {

                            return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
                        }
                        
                        if ($save) {

                            $auctionbidder = AuctionBidder::where('auction_id',$auction_id)
                                                            ->where('bidder_id',$currentUser->id)
                                                            ->select(['id','no_of_times'])
                                                            ->first();
                            if (count($auctionbidder)) {

                                //if its not 1st time--then update no_of_times
                                $auctionbidder->no_of_times = $auctionbidder->no_of_times+1;
                                $auctionbidder->save();

                            } else {

                                //if first time--save record
                                $auctionbidder = new AuctionBidder;

                                $auctionbidder->auction_id = $auction_id;
                                $auctionbidder->bidder_id  = $currentUser->id;
                                $auctionbidder->no_of_times= 1;
                                $auctionbidder->slug       = $auctionbidder::makeSlug(getHashCode());
                                $auctionbidder->save();
                            }     


                            //bidding table
                            $bidding = new Bidding;
                            $bidding->ab_id = $auctionbidder->id;
                            $bidding->bid_amount = $bid_amount;

                            $bidding->save();

                            flash('success','bid_placed_successfully', 'success');
                            return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);


                        }
                        


                    } else {

                        flash('error','auction_date_time_is_not_valid', 'error');
                        return redirect(URL_HOME_AUCTIONS);
                    }
                } else {

                    flash('error','auction_not_found', 'error');
                    return redirect(URL_HOME_AUCTIONS);
                }        
                
            
            } else {
                flash('error','bid_amount_not_valid', 'error');
                return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
            }

            
        } else {
           
            flash('info','please_login_to_continue', 'info');
            return redirect(URL_USERS_LOGIN);
        }

    }

    /**
     * [isValidRecord description]
     * @param  [type]  $record [description]
     * @return boolean         [description]
     */
    public function isValidRecord($record)
    {
       if ($record === null) {
          flash('Ooops...!', getPhrase("page_not_found"), 'error');
          return $this->getRedirectUrl();
       }

       return FALSE;
    }

    /**
     * [getRedirectUrl description]
     * @return [type] [description]
     */
    public function getRedirectUrl()
    {
      return URL_HOME_AUCTIONS;
    }


     /**
      * [check_isdemo description]
      * @return [type] [description]
      */
    public function check_isdemo()
    {
       if (env('DEMO_MODE'))
          return URL_HOME_AUCTIONS;
       else
          return false;
    }







    public function saveLiveBid(Request $request)
    {
        // dd($request);
        //check login
        //check user authentication
        if (!checkRole(getUserGrade(2))) {
          //999 - not logged in
          return json_encode(array('status'=>999));
        }


        if (checkRole(getUserGrade(4))) {
            // return redirect(URL_DASHBOARD);
            //999-not authorized user
             return json_encode(array('status'=>999));
        }



        $currentUser = \Auth::user();

        $bid_amount  = $request->bid_amount;
        $auction_id  = $request->bid_auction_id;

        $save=FALSE;

        if ($currentUser) {


           if ($redirect = $this->check_isdemo()) {
              // flash('info','crud_operations_disabled_in_demo', 'info');
              // return redirect($redirect);
              //9999-demo mode
              return json_encode(array('status'=>999));
            }

            if ($bid_amount && $auction_id) {

                //check is user is bidder
                if ($currentUser->role_id!=getRoleData('bidder')) {
                    // flash('error','please_login_as_bidder_to_continue', 'error');
                    // return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
                    //999-not authorized user
                    return json_encode(array('status'=>999));
                }
            

                //check auction date, start and end time,auction status,admin status
                // $auction = Auction::where('id',$auction_id)->first();//two columns have toinclude

                $auction = Auction::join('users','auctions.user_id','users.id')
                        ->join('categories','auctions.category_id','categories.id')
                        ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                        ->select(['auctions.*'])
                        ->where('auctions.admin_status','approved')
                        ->where('auctions.auction_status', '=', 'open')
                        ->where('users.role_id',getRoleData('seller'))
                        ->where('users.approved',1)
                        ->where('auctions.live_auction_date','=',DATE('Y-m-d'))
                        ->where('categories.status','Active')
                        ->where('sub_catogories.status','Active')
                        ->where('auctions.id',$auction_id)
                        ->first(); 
             
                // $auction = Auction::getLiveAuctionRecord($auction_id);//working
                //check auction live date, start and end time
                //if current time >= start time and current_time <= end_date save
                //else show its not in live now..--same condition above - live-auction method

                  if (!empty($auction)) {


                  //check already someone paid auction amount/bought auction
                  //bid payment - paid or not
                  $bid_payment_record = $auction->getAuctionPayment();
                  
                  //buy now payment - paid or not
                  $buy_now_payment_record = $auction->getBuyNowAuctionPayment();
                  
                  $bid_div=true;
                  if (count($bid_payment_record) || count($buy_now_payment_record))
                    $bid_div = false;

                  if (!$bid_div) {
                      /*flash('info','Some one has already won/bought this auction..','info');
                      return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);*/

                      //auction is already sold - 
                     return json_encode(array('status'=>1111));
                  }





                     //live auction condition
                      $live_auction=false;
                      $today = date('Y-m-d');
                      if ($auction->live_auction_date) {

                          if ($auction->admin_status=='approved' && $auction->auction_status=='open' && $auction->live_auction_date==$today) {

                            $live_auction_start_time = strtotime($auction->live_auction_start_time);
                            $live_auction_end_time   = strtotime($auction->live_auction_end_time);

                              //reached reserve price and time is over
                              //display winner
                              $reserve_price = $auction->reserve_price;

                              //check auction last recent bid
                              $auction_last_bid = Bidding::getAuctionLastBid($auction->id);
                              if (!empty($auction_last_bid)) {
                                if ($auction_last_bid->bid_amount >= $reserve_price) {
                                  //check if auction time is over
                                  if ($live_auction_start_time <= time() && $live_auction_end_time >= time()) {
                                    $live_auction=true;
                                  }

                                   if (!$live_auction) {
                                    //reached /> reserve price,display winner auction time is over
                                    $currency_code = getSetting('currency_code','site_settings');
                                    $msg = $auction_last_bid->name.' has Won the Auction with the Highest Bid '.$currency_code.$auction_last_bid->bid_amount;
                                     return json_encode(array('status'=>555,'msg'=>$msg));
                                    }

                                }
                              }

                             


                              //not reached reserve price
                              if ($live_auction_start_time <= time() && $live_auction_end_time >= time()) {
                                $live_auction=true;
                              }

                            }
                      }
                      if (!$live_auction) {
                        /*flash('info','Bidding time is not valid..can not place bid now', 'info');
                        return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);*/
                         return json_encode(array('status'=>11));//auction date/time is not matching
                      }






                    //start date time,end date time
                   /* $now = strtotime(date('Y-m-d H:i:s'));
                    $start_date = strtotime($auction->start_date);
                    $end_date   = strtotime($auction->end_date);*/

                    if ($live_auction && $bid_div) {



                        //check last recent bid
                        $last_bid = Bidding::getLastBidRecord($auction->id);


                        /**LIVE AUCTION BID CONDITIONS**/
                        $placeholder='';
                        $minimum_bid = $auction->minimum_bid;


                        //check auction_type
                        if ($auction->is_bid_increment && $auction->bid_increment>0) {
                          //if incremental
                          if (!empty($last_bid)) {

                            $bid_increment = $auction->bid_increment;


                            if (($bid_amount > $last_bid->bid_amount) && ($bid_amount==($last_bid->bid_amount+$bid_increment))) {
                              //bid amount > last time placed bid amount +
                              //bid amount == last time placed bid + incremental amount
                              $save=TRUE;
                            } else {
                              $save=FALSE;
                            }

                          } else {
                              //first time place bid
                              if ($minimum_bid>0) {
                                //if minimum bid set
                                if ($bid_amount > $minimum_bid) {
                                  //if bid amount > the minium bid
                                  $save=TRUE;
                                } else {
                                  $save=FASLE;
                                }
                              } else {
                                //if not set minimum bid
                                $save=TRUE;
                              }
                          }


                        } else {
                          //if non-increment
                          
                            if (!empty($last_bid)) {
                                //second time onwards
                                if ($bid_amount > $last_bid->bid_amount) {
                                  //bid amount > last time placed bid
                                  $save=TRUE;
                                } else {
                                  $save=FALSE;
                                }

                            } else {
                                //first time place bid
                                if ($minimum_bid>0) {
                                  //minimum bid set
                                  //check bid_amount > minimum_bid
                                  if ($bid_amount > $minimum_bid) {
                                    //save
                                    $save=TRUE;
                                  } else {
                                    //not save
                                    $save=FALSE;
                                  }

                                } else {
                                  //no minimum bid
                                  //save
                                  $save=TRUE;
                                }
                            }
                        }
                        /**LIVE AUCTION**/



                        
                        if ($save) {

                            $auctionbidder = AuctionBidder::where('auction_id',$auction_id)
                                                            ->where('bidder_id',$currentUser->id)
                                                            ->select(['id','no_of_times'])
                                                            ->first();
                            if (count($auctionbidder)) {

                                //if its not 1st time--then update no_of_times
                                $auctionbidder->no_of_times = $auctionbidder->no_of_times+1;
                                $auctionbidder->save();

                            } else {

                                //if first time--save record
                                $auctionbidder = new AuctionBidder;

                                $auctionbidder->auction_id = $auction_id;
                                $auctionbidder->bidder_id  = $currentUser->id;
                                $auctionbidder->no_of_times= 1;
                                $auctionbidder->slug      = $auctionbidder::makeSlug(getHashCode());
                                $auctionbidder->save();
                            }     


                            //bidding table
                            $bidding = new Bidding;
                            $bidding->ab_id = $auctionbidder->id;
                            $bidding->bid_amount = $bid_amount;

                            $bidding->save();


                            //placeholder
                            $enter_amount = 'Enter amount ';
                            if ($auction->is_bid_increment && $auction->bid_increment>0) {
                              //if increment = add incremental cost +current one=show to user
                              
                              if (isset($bidding) && !empty($bidding->bid_amount)) {
                                 $amnt = $bidding->bid_amount+$auction->bid_increment;
                                 $enter_amount .= ' = '.$amnt;
                              }
                              elseif ($auction->minimum_bid>0)
                                $enter_amount .= ' > '.$auction->minimum_bid;

                            } else {
                              //if not incremental
                              if (isset($bidding) && !empty($bidding->bid_amount))
                                $enter_amount .= '> '.$bidding->bid_amount;
                              elseif ($auction->minimum_bid>0)
                                $enter_amount .= '> '.$auction->minimum_bid;
                            }



                            //last 5 bids
                            $currency_code = getSetting('currency_code','site_settings');
                            
                            $latest_bids='';
                            $last_five_bids = $auction->getAuctionBiddingHistory(5);

                            if (count($last_five_bids)) {
                              $latest_bids ='<ul class="list-group">';

                              foreach ($last_five_bids as $lb) {

                                $latest_bids .= '<li class="list-group-item d-flex justify-content-between align-items-center">
                                '.$lb->name.'
                                <span class="badge badge-primary badge-pill">'.$currency_code.$lb->bid_amount.'</span></li>';
                              }

                              $latest_bids .= '</ul>';
                            }

                            return json_encode(array('status'=>111,
                                                    'latest_bids'=>$latest_bids,
                                                    'placeholder'=>$enter_amount
                                                    ));//bid placed successfully
                            //placeholder
                            //latest 5 bids
                            
                            // flash('success','bid_placed_successfully', 'success');
                            // return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);

                        } else {
                          return json_encode(array('status'=>99));//bid amount not valid
                        }
                        
                    } else {

                      return json_encode(array('status'=>9999));//auction is not in live

                        // flash('error','auction_date_time_is_not_valid', 'error');
                        // return redirect(URL_HOME_AUCTIONS);
                    } 

                  } else {

                    // flash('error','auction_not_found', 'error');
                    // return redirect(URL_HOME_AUCTIONS);
                    return json_encode(array('status'=>0));//auction record not found
                }        
                
            
            } else {
                // flash('error','bid_amount_not_valid', 'error');
                // return redirect(URL_HOME_AUCTION_DETAILS.'/'.$auction->slug);
                //99-bid amount not valid
                return json_encode(array('status'=>99));//invalid operation
            }

            
        } else {
           
            // flash('info','please_login_to_continue', 'info');
            // return redirect(URL_USERS_LOGIN);
            //999-not authorized user
             return json_encode(array('status'=>999));
        }

    }




    public function liveAuctions(Request $request)
    {

        if (checkRole(getUserGrade(4))) {
            return redirect(URL_DASHBOARD);
        }

        //which are sold / auction amount paid - 
        $payment_auctions=Payment::where('payment_status','=','success')
                                    ->pluck('auction_id')
                                    ->toArray();
       
        $auctions =  Auction::join('users','auctions.user_id','users.id')
                      ->join('categories','auctions.category_id','categories.id')
                      ->join('sub_catogories','auctions.sub_category_id','sub_catogories.id')
                      ->join('countries','users.country_id','countries.id')
                      ->join('states','users.state_id','states.id')
                      ->join('cities','users.city_id','cities.id')
                      ->select(['auctions.id','auctions.title','auctions.slug',
                                'auctions.description','auctions.image',
                                'auctions.reserve_price','auctions.auction_status',
                                'auctions.created_at','auctions.live_auction_date',
                                'auctions.live_auction_start_time',
                                'auctions.live_auction_end_time',
                                'users.slug as user_slug','users.username',
                                'countries.title as country','states.state','cities.city'])
                      ->where('auctions.admin_status','approved')
                      ->where('auctions.auction_status','open')
                      ->where('categories.status','Active')
                      ->where('sub_catogories.status','Active')
                      ->where('users.role_id',getRoleData('seller'))
                      ->where('users.approved',1)
                      ->whereNotIn('auctions.id',$payment_auctions)
                      ->whereDate ('auctions.live_auction_date','=',DATE('Y-m-d'))//correct
                      ->where(function ($query) {
                      $query->whereTime('auctions.live_auction_start_time', '<=', DATE('H:i:s'))
                            ->orWhereTime('auctions.live_auction_start_time', '>=', DATE('H:i:s'));
                      })//correct-happening now,gonna happen today
                      // ->whereTime('auctions.live_auction_start_time', '<=', DATE('H:i:s'))//correct
                      ->whereTime('auctions.live_auction_end_time', '>=', DATE('H:i:s'))//correct
                      /*->where('auctions.start_date','<=',NOW())
                      ->where('auctions.end_date','>=',NOW())*/
                      /*->where('auctions.start_date','<=',DATE('Y-m-d'))
                      ->where('auctions.end_date','>=',DATE('Y-m-d'))*/
                      /*->where(function ($query) {
                      $query->where('auctions.auction_status', '=', 'open')
                            ->orWhere('auctions.auction_status', '=', 'new');
                      })*/
                      ->orderBy('auctions.id','desc')
                      // ->orderByRaw('RAND()')->take(6)
                      ->get();

        
        $data['live_auctions'] = $auctions;
        
       

        $data['active_class']   = 'live_auctions';
        $data['layout']         = getLayout();
        $data['title']          = getPhrase('live_auctions');
        return view('home.pages.auctions.live_auctions', $data);

    }
}