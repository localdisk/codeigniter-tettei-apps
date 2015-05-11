<?php

class Mail_model_test extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('shop/Mail_model');
		$this->obj = $this->CI->Mail_model;
		$this->CI->email = new Mock_Libraries_Email();
	}

	public function test_sendmail()
	{
		$mail['from_name'] = 'CIショップ';
		$mail['from']      = 'from@example.jp';
		$mail['to']        = 'to@example.org';
		$mail['bcc']       = 'admin@exaple.jp';
		$mail['subject']   = '【注文メール】CIショップ';
		$mail['body']      = 'CIショップにご注文いただきありがとうございます。';
		$actual = $this->obj->sendmail($mail);
		$this->assertTrue($actual);
	}
}