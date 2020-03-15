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
		$data['text_LOR'] = $this->language->get('text_LOR');
		$data['text_LOR'] = $this->language->get('text_LOR');
		$data['text_LOR'] = $this->language->get('text_LOR');
		$data['text_LOR'] = $this->language->get('text_LOR');
		$data['text_LOR'] = $this->language->get('text_LOR');

		$data['immunity'] = $this->url->link('information/information&information_id=8', '', true);
		$data['LOR'] = $this->url->link('information/information&information_id=9', '', true);
		$data['bone_and_joint'] = $this->url->link('information/information&information_id=10', '', true);
		$data['cardio_vascular'] = $this->url->link('information/information&information_id=11', '', true);
		$data['gastric_intestinal_parasitic'] = $this->url->link('information/information&information_id=12', '', true);
		$data['LOR'] = $this->url->link('information/information&information_id=9', '', true);
		$data['LOR'] = $this->url->link('information/information&information_id=9', '', true);
		$data['LOR'] = $this->url->link('information/information&information_id=9', '', true);
		$data['LOR'] = $this->url->link('information/information&information_id=9', '', true);
		$data['LOR'] = $this->url->link('information/information&information_id=9', '', true);

		return $this->load->view('extension/module/recommendation', $data);
	}
}