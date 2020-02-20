<?php
namespace app\modules\gorko_ny\controllers;

use Yii;
use yii\web\Controller;
use common\models\GorkoApi;

use common\pmnetwork\controllers\ListingControllerStudios as BaseListingController;

class ListingController extends BaseListingController
{
  protected $per_page = 12;
}

//class ListingController extends Controller
//{
//	public function actionIndex(){
//		GorkoApi::renewAllData();
//		return 1;
//	}	
//}