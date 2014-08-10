<?php
namespace libs\framework;
class Session {
	public $data = array ();
	public function __construct() {
		if (! session_id ()) {
			ini_set ( 'session.use_only_cookies', 'On' );
			ini_set ( 'session.use_trans_sid', 'Off' );
			ini_set ( 'session.cookie_httponly', 'On' );
			
			session_set_cookie_params ( 0, '/' );
			/* 设置缓存限制为 “private” */
			
			session_cache_limiter ( 'private' );
			$cache_limiter = session_cache_limiter ();
			
			/* 设置缓存过期时间为 30 分钟 */
			session_cache_expire ( 30 );
			$cache_expire = session_cache_expire ();
			 
			session_start ();
		}
		$this->data = & $_SESSION;
	}
	/**
	 * get session id
	 * 
	 * @return string
	 */
	public function getId() {
		return session_id ();
	}
	/**
	 * clean all session
	 */
	public function clean() {
		// 重置会话中的所有变量
		$_SESSION = array ();
		
		// 如果要清理的更彻底，那么同时删除会话 cookie
		// 注意：这样不但销毁了会话中的数据，还同时销毁了会话本身
		if (ini_get ( "session.use_cookies" )) {
			$params = session_get_cookie_params ();
			setcookie ( session_name (), '', time () - 42000, $params ["path"], $params ["domain"], $params ["secure"], $params ["httponly"] );
		}
		
		// 最后，销毁会话
		return session_destroy ();
	}
}

