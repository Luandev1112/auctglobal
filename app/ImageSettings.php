<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Image;

class ImageSettings extends Model
{

   

    ////////////////////////////
    // Profile Upload Options //
    ////////////////////////////
    protected $profilePicsPath      = "public/uploads/users/";
	protected $profilePicsThumbnailpath = "public/uploads/users/thumbnail/";
    protected $thumbnailSize = 50;
    protected $profilePicSize = 140;
    protected $defaultProfilePicPath           = "public/uploads/users/default.png";
    protected $defaultprofilePicsThumbnailpath = "public/uploads/users/thumbnail/default.png";
	protected $settingsImagePath = "public/uploads/settings/";



    ///////////////////////////////////
    // Bank Image //
    ///////////////////////////////////
    protected $bankLogosPath      = "public/uploads/banks/";
    protected $bankLogosThumbnailpath = "public/uploads/banks/thumbnail/";


    ///////////////////////////////////
    // Image Question upload options //
    ///////////////////////////////////
    protected $examImagepath                = "public/uploads/exams/";
    protected $examImageSize                = 600;
    protected $examMaxFileSize              = 10000;

     // protected $defaultProfilePicPath           = "uploads/exams/default.png";
    // protected $defaultprofilePicsThumbnailpath = "uploads/exams/thumbnail/default.png";


    protected $qualificationPath  = "public/uploads/qualification/";
    // protected $qualificationThumbnailPath  = "public/uploads/qualification/thumbnail/";

    protected $signaturePath  = "public/uploads/signature/";
    // protected $signatureThumbnailPath  = "public/uploads/signature/thumbnail/";
    


    protected $defaultAuctionImagePath           = "public/uploads/auctions/default.png";
    protected $defaultAuctionImageThumbnailpath  = "public/uploads/auctions/thumbnail/default.png";


    protected $auctionImagesPath           = "public/uploads/auctions/";
    protected $auctionImagesThumbnailpath  = "public/uploads/auctions/thumbnail/";

    protected $auctionThumbnailSize = 125;//getSetting('thumbnail_size','auction_settings');
    protected $auctionImageSize     = 300; //getSetting('max_pictures_size','auction_settings');



    protected $englishSaleNoticePath           = "public/uploads/english_sale_notice/";
    protected $vernacularSaleNoticePath        = "public/uploads/vernacular_sale_notice/";
    protected $annexure2Path                   = "public/uploads/annexure_2/";



    protected $bidSignaturesPath      = "public/uploads/bid_signatures/";
    protected $bidSignaturesThumbnailpath = "public/uploads/bid_signatures/thumbnail/";


    protected $defaultCompanyLogoPath           = "public/uploads/company-logos/default.png";
    protected $defaultCompanyLogoThumbnailpath = "public/uploads/company-logos/thumbnail/default.png";

    protected $companyLogoPath      = "public/uploads/company-logos/";
    protected $companyLogoThumbnailpath = "public/uploads/company-logos/thumbnail/";

    /**
     * If Needed can change the Profile Pics Path
     * @param [string] $path [description]
     * @return  void
     */
    

    public function setProfilePicsPath($path)
	{
		$this->profilePicsPath = $path;
	}
    
    /**
     * Returns the Profile Pics Path
     * @return [string] [description]
     */
    public function getDefaultProfilePicPath()
    {
        return $this->defaultProfilePicPath;
    }

      /**
     * Returns the Profile Pics Path
     * @return [string] [description]
     */
    public function getDefaultprofilePicsThumbnailpath()
    {
        return $this->defaultprofilePicsThumbnailpath;
    }


    /**
     * Returns the Profile Pics Path
     * @return [string] [description]
     */
    public function getProfilePicsPath()
    {
        return $this->profilePicsPath;
    }

    /**
     * Returns the Profile Thumbnail Path
     * @return [string] [description]
     */
    public function getProfilePicsThumbnailpath()
    {
        return $this->profilePicsThumbnailpath;
    }

     /**
     * Returns the Qualification Pics Path
     * @return [string] [description]
     */
    public function getQualificationPath()
    {
        return $this->qualificationPath;
    }

    /**
     * Returns the Qualification Thumbnail Path
     * @return [string] [description]
     */
    /*public function getQualificationThumbnailpath()
    {
        return $this->qualificationThumbnailPath;
    }
*/

    /**
     * Returns the Signature Pics Path
     * @return [string] [description]
     */
    public function getSignaturePath()
    {
        return $this->signaturePath;
    }

    /**
     * Returns the Signature Thumbnail Path
     * @return [string] [description]
     */
    /*public function getSignatureThumbnailpath()
    {
        return $this->signatureThumbnailPath;
    }*/



    /**
     * Returns the Thumbnail size
     * @return [numeric] [description]
     */
    public function getThumbnailSize()
    {
        return $this->thumbnailSize;
    }

    /**
     * Returns the Profile Pic size
     * @return [numeric] [description]
     */
    public function getProfilePicSize()
    {
    	return $this->profilePicSize;
    }

    /**
     * If needed can change the Thumb size
     * @param [Integer] $size [description]
     * @return  void [<description>]
     */
    public function setThumbnailSize($size)
    {
    	$this->thumbnailSize = $size;
    }

  
    public function getExamImagePath()
    {
        return $this->examImagepath;
    }

    public function getExamImageSize()
    {
        return $this->examImageSize;
    }

    public function getExamMaxFilesize()
    {
        return $this->examMaxFileSize;
    }

    public function getSettingsImagePath()
    {
        return $this->settingsImagePath;
    }


    // public function saveImage(UploadedFile $file, User $user, $path)
    // {
		  // $destinationPath = $path;
    //       $fileName = $user->name.'_'.$user->id.'.'.$file->photo->guessClientExtension();
    //       ;
    //       $file->move($destinationPath, $fileName);
    //       $user->image = $fileName;
    //       Image::make($destinationPath.$fileName)->fit($this->getThumbnailSize())->save($destinationPath.$fileName);
    //       $user->save();		    	
    // }


    /**
     * Set Bank Logos Path
     * @return [string] [description]
     */
    public function setBankLogoPath($path)
    {
        $this->bankLogosPath = $path;
    }

    /**
     * Returns the Bank Logos Path
     * @return [string] [description]
     */
    public function getBankLogosPath()
    {
        return $this->bankLogosPath;
    }

     /**
     * Returns the Bank logo Thumbnail Path
     * @return [string] [description]
     */
    public function getBankLogosThumbnailpath()
    {
        return $this->bankLogosThumbnailpath;
    }




    /**
     * Returns the Default Auction Image Path
     * @return [string] [description]
     */
    public function getDefaultAuctionImagePath()
    {
        return $this->defaultAuctionImagePath;
    }

      /**
     * Returns the Default Auction thumbnail Image path
     * @return [string] [description]
     */
    public function getDefaultAuctionImageThumbnailpath()
    {
        return $this->defaultAuctionImageThumbnailpath;
    }



    /**
     * Returns the Auction Image Path
     * @return [string] [description]
     */
    public function getAuctionImagePath()
    {
        return $this->auctionImagesPath;
    }

     /**
     * Returns the Auction Image Thumbnail Path
     * @return [string] [description]
     */
    public function getAuctionImageThumbnailpath()
    {
        return $this->auctionImagesThumbnailpath;
    }


    /**
     * Returns the Auction Image size
     * @return [numeric] [description]
     */
    public function getAuctionImageSize()
    {
        return $this->auctionImageSize;
    }




     /**
     * Returns the Thumbnail size
     * @return [numeric] [description]
     */
    public function getAuctionThumbnailSize()
    {
        return $this->auctionThumbnailSize;
    }




     /**
     * Returns the Property English Sale Notice Document Path
     * @return [string] [description]
     */
    public function getEnglishSaleNoticePath()
    {
        return $this->englishSaleNoticePath;
    }



    /**
     * Returns the Property Vernacular Sale Notice Document Path
     * @return [string] [description]
     */
    public function getVernacularSaleNoticePath()
    {
        return $this->vernacularSaleNoticePath;
    }



     /**
     * Returns the Property Annexure || Document Path
     * @return [string] [description]
     */
    public function getAnnexure2Path()
    {
        return $this->annexure2Path;
    }



     /**
     * Returns the Profile Pics Path
     * @return [string] [description]
     */
    public function getBidSignaturesPath()
    {
        return $this->bidSignaturesPath;
    }

    /**
     * Returns the Profile Thumbnail Path
     * @return [string] [description]
     */
    public function getBidSignaturesThumbnailpath()
    {
        return $this->bidSignaturesThumbnailpath;
    }


     /**
     * Returns the Default Company Logo Path
     * @return [string] [description]
     */
    public function getDefaultCompanyLogoPath()
    {
        return $this->defaultCompanyLogoPath;
    }

      /**
     * Returns the Default Company Logo Thumbnail Path
     * @return [string] [description]
     */
    public function getDefaultCompanyLogoThumbnailpath()
    {
        return $this->defaultCompanyLogoThumbnailpath;
    }


     /**
     * Returns the Company Logo Path
     * @return [string] [description]
     */
    public function getCompanyLogoPath()
    {
        return $this->companyLogoPath;
    }

    /**
     * Returns the Company Logo Thumbnail Path
     * @return [string] [description]
     */
    public function getCompanyLogoThumbnailpath()
    {
        return $this->companyLogoThumbnailpath;
    }

}
