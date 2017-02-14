<?php
if (ChiAndRuFilterHelper::checkPostRequests ()) {
	header ( "HTTP/1.0 403 Forbidden" );
	die ( "Sorry! No chinese or russian allowed!" );
}
