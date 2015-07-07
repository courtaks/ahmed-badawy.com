<?php namespace App\Http\Controllers\Spidro;

use App\Http\Controllers\BaseController as BaseController;

class SpidroController extends BaseController {


	public function ask(){
		$data = [
			'route_info'=>\sr::common("projects_index"),
			'theme'=>$this->themes[0],
		];
		return $this->get_view("spidro.ad_area.index",$data,'spidro'); 
	}

	public function ask_filter_city($city=null){
		$cities = \Lst::city_list(null,'ar');
		$data = [
			"regions"=>$cities['region'],
		];
		if($city!=null){
			$data['city'] = $cities['region'][$city];
			$data['region_cities'] = $cities['city'][$city];
			array_unshift($data['region_cities'],"كل المدن");
		}
		return view(get_location('spidro.filter_area.ask.filters.city'),$data);
	}

	public function ask_filter_new_ad(){
		$tax_list = \Lst::tax_list('ar');
		$data = [
			"tax_list"=>$tax_list,
		];
		// dd($tax_list);
		return view(get_location('spidro.filter_area.ask.filters.new_ad'),$data);
	}

	public function new_ad_panel($cate,$sub){
		$tax_list = \Lst::tax_list('ar');
		$sub_spef = $tax_list[$cate][$sub];
		$data = [
			"tax_list"=>$tax_list,
			"sub"=>$sub,
			"cate"=>$cate,
			"models"=>$sub_spef
		];
		// dd($tax_list[$cate]);
		// dd($data);
		return view(get_location('spidro.ad_create._main'),$data);
	}

	public function save_ad(){
		$input = \Request::all();
		// dd($input);
		$ad_data = [
			"ad_title"=>$input['ad_title'],
			"desc"=>$input['desc'],
			"cost"=>$input['cost'],
			"user_id"=>1,
			"year"=>$input['year'],
			"km"=>$input['km'],
			"cate"=>$input['model'],
			"sub_cate_1"=>$input['sub1'],
		];
		$input['user_id'] = 1;
		$ans = \spidro_ads_model::create($ad_data);
		dd($ans);
	}


/**********************************************************************/

	public function view_ads(){
		
		$data = [

		];
		return view(get_location('spidro.ad_view.main'),$data);		
	}
	
	



}
