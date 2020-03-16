<?php
class ControllerExtensionModuleRecommendation extends Controller {
	public function index() {
		$this->load->language('extension/module/recommendation');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_immunity'] = $this->language->get('text_immunity');
		$data['text_LOR'] = $this->language->get('text_LOR');
		$data['text_bone_and_joint'] = $this->language->get('text_bone_and_joint');
		$data['text_cardio_vascular'] = $this->language->get('text_cardio_vascular');
		$data['text_gastric_intestinal_parasitic'] = $this->language->get('text_gastric_intestinal_parasitic');
		$data['text_womens'] = $this->language->get('text_womens');
		$data['text_mens'] = $this->language->get('text_mens');
		$data['text_kidneys_and_urinary'] = $this->language->get('text_kidneys_and_urinary');
		$data['text_nervous'] = $this->language->get('text_nervous');
		$data['text_endocrine'] = $this->language->get('text_endocrine');
		$data['text_muscle'] = $this->language->get('text_muscle');
		$data['text_skin'] = $this->language->get('text_skin');
		$data['text_veins'] = $this->language->get('text_veins');
		$data['text_eye'] = $this->language->get('text_eye');
		$data['text_HIV'] = $this->language->get('text_HIV');

		$data['immunity'] = $this->url->link('information/information&information_id=8', '', true);
		$data['LOR'] = $this->url->link('information/information&information_id=9', '', true);
		$data['bone_and_joint'] = $this->url->link('information/information&information_id=10', '', true);
		$data['cardio_vascular'] = $this->url->link('information/information&information_id=11', '', true);
		$data['gastric_intestinal_parasitic'] = $this->url->link('information/information&information_id=12', '', true);
		$data['womens'] = $this->url->link('information/information&information_id=13', '', true);
		$data['mens'] = $this->url->link('information/information&information_id=14', '', true);
		$data['kidneys_and_urinary'] = $this->url->link('information/information&information_id=15', '', true);
		$data['nervous'] = $this->url->link('information/information&information_id=16', '', true);
		$data['endocrine'] = $this->url->link('information/information&information_id=17', '', true);
		$data['muscle'] = $this->url->link('information/information&information_id=18', '', true);
		$data['skin'] = $this->url->link('information/information&information_id=19', '', true);
		$data['veins'] = $this->url->link('information/information&information_id=20', '', true);
		$data['eye'] = $this->url->link('information/information&information_id=21', '', true);
		$data['HIV'] = $this->url->link('information/information&information_id=22', '', true);

		return $this->load->view('extension/module/recommendation', $data);
	}
}