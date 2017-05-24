<?php
/*
* session log
* $file, $error là hai thuộc tính private
* methods: __construct,logStart, logMessage,logEnd,isError,getError là những phương thức public
* __construct là phương thức khởi tạo
* logStart là  phương thức ghi nội dung mở đầu của log
* logMessage là phương thức ghi nội dung message
* logEnd kết thức ghi log.
* getError lấy nội dung lỗi trong quá trình ghi log
* isError kiểm tra log trong quá trình ghi log
* 
*/
class log {
	private $file;
	private $error = false;
 
	function __construct($file) {
		if(!file_exists($file)) {
			file_put_contents($file, '');
		}
		$this->file = $file;
	}
 
	function logStart() {
		$msg_start = '-------------------------------'.PHP_EOL;
		$msg_start .= 'Time: '.date('d/m/Y h:i:s').PHP_EOL;
		if(!file_put_contents($this->file, $msg_start, FILE_APPEND)) {
			$this->error = 'Can not write to log';
		}
	}
 
	function logMessage($message) {
		$message = "Error message: ".$message.PHP_EOL;
		if(!file_put_contents($this->file, $message, FILE_APPEND)) {
			$this->error = 'Can not write to log';
		}
	}
 
	function logEnd() {
		$msg_end = '-------------------------------'.PHP_EOL;
		if(!file_put_contents($this->file, $msg_end, FILE_APPEND)) {
			$this->error = 'Can not write to log';
		}
	}
 
	function isError() {
		if($this->error != false) {
			return true;
		}
		return false;
	}
 
	function getError() {
		return $this->error;
	}
}
$log = new log('../PHP_Log/log/error.txt'); //if file doesnt exiists, will be created
$log->logStart(); 
$log->logMessage('Eror 404: Not found');
$log->logEnd(); 