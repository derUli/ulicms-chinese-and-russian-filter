<?php
if (ChiAndRuFilterHelper::checkPostRequests ()) {
	Settings::set( "contact_form_refused_spam_mails", Settings::get( "contact_form_refused_spam_mails" ) + 1);
	header ( "HTTP/1.0 403 Forbidden" );
	die ( "Sorry! No chinese or russian allowed!" );
}
