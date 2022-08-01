<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\AuctionSetting;

use App\Auction;
use DB;

class ReportsController extends Controller
{
    /**
     * [auctionReport description]
     * @return [type] [description]
     */
    public function auctionReport()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $reportTitle = 'Auction Report';
        $reportLabel = 'COUNT';
        $chartType   = 'line';

        $results = User::get()->sortBy('created_at')->groupBy(function ($entry) {
            if ($entry->created_at instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->created_at)->format('Y-m');
            }

            return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->created_at)->format('Y-m');
        })->map(function ($entries, $group) {
            return $entries->sum(function ($entry) {
                return AuctionSetting::where('created_by_id', $entry->id)->count('id');
            });
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

    /**
     * [sellerWiseReport description]
     * @return [type] [description]
     */
    public function sellerWiseReport()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }

        $reportTitle = 'Seller wise Report';
        $reportLabel = 'Auctions';
        $chartType   = 'line';

        $results = User::where('role_id',getRoleData('seller'))->get()->sortBy('created_at')->groupBy(function ($entry) {
            /*if ($entry->created_at instanceof \Carbon\Carbon) {
                return \Carbon\Carbon::parse($entry->created_at)->format('Y-m');
            }*/

            return $entry->name;

            // return \Carbon\Carbon::createFromFormat(config('app.date_format'), $entry->created_at)->format('Y-m');
        })->map(function ($entries, $group) {
            return $entries->sum(function ($entry) {
                return \App\Auction::where('user_id', $entry->id)->count('id');
            });
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }


    /**
     * [timeWiseReport description]
     * @return [type] [description]
     */
    public function timeWiseReport()
    {
        if (!checkRole(getUserGrade(1)))
        {
            prepareBlockUserMessage();
            return back();
        }
        
        $reportTitle = 'Year - Month wise Report';
        $reportLabel = 'Auctions';
        $chartType   = 'bar';

        

        $results = Auction::select(DB::raw('YEAR(created_at) year, MONTH(created_at) month '))->distinct()->get()->sortBy('month')->groupBy(function ($entry) {
            

            return $entry->year.'-'.date('F', mktime(0, 0, 0, $entry->month, 1));

           
        })->map(function ($entries, $group) {
            return $entries->sum(function ($entry) {
                return Auction::whereYear('created_at', $entry->year)->whereMonth('created_at',$entry->month)->count('id');
            });
        });

        return view('admin.reports', compact('reportTitle', 'results', 'chartType', 'reportLabel'));
    }

    /**
     * [sellerAuctions description]
     * @return [type] [description]
     */
    public function sellerAuctions()
    {
        
        $data['sellers'] = User::join('roles','users.role_id','roles.id')
                            ->where('users.role_id',getRoleData('seller'))
                            ->pluck('users.name','users.id');

        $data['title'] = 'Reports';
        return view('reports.seller-auctions',$data);
    }

    /**
     * [getSellerAuctions description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getSellerAuctions(Request $request)
    {
       
        $user_id = $request->user_id;

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        if ($start_date && $end_date) {

            if (strtotime($start_date) <= strtotime($end_date)) {

                $start_date = date('Y-m-d',strtotime($start_date));
                $end_date   = date('Y-m-d',strtotime($end_date));

                /*$start_date = date('Y-m-d H:i:s',strtotime($start_date));
                $end_date   = date('Y-m-d H:i:s',strtotime($end_date));*/

            }
        }
        

        $auctions=null;

        if ($user_id && $start_date && $end_date) {

            $auctions = Auction::join('users','auctions.user_id','users.id')
                            ->leftJoin('categories','auctions.category_id','categories.id')
                            ->select(['auctions.slug','auctions.title',
                            'auctions.start_date','auctions.end_date','auctions.image','auctions.reserve_price','auctions.auction_status','auctions.admin_status','categories.category'])
                            ->where('auctions.user_id',$user_id)
                            ->where('start_date','>=',$start_date)
                            ->where('end_date','<=',$end_date)
                            /*->where('auctions.start_date', '>=' , $start_date)
                            ->where('auctions.end_date', '<=', $end_date)*/
                            ->get();
                           
        }

        return json_encode(array('auctions'=>$auctions));                    
    }

}
