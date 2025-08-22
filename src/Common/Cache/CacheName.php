<?php
namespace Common\Cache;

/**
 * Redis 缓存 Key 定义
 * 统一管理，避免多项目维护不一致
 */
class CacheName
{
	/**
	 * 前缀
	 */
	private static function prefix(): string
	{
		return 'xsj:dataMiddleStation:'; // ThinkPHP 的 env 方法
	}

	// ---------------- 股票 ----------------
	public static function STOCK_HK(): string { return self::prefix() . 'stock:hk'; }
	public static function STOCK_US(): string { return self::prefix() . 'stock:us'; }
	public static function STOCK_UK(): string { return self::prefix() . 'stock:uk'; }
	public static function STOCK_JP(): string { return self::prefix() . 'stock:jp'; }

	// ---------------- 期货 ----------------
	public static function FUTURE(): string { return self::prefix() . 'future:us'; }

	// ---------------- 外汇 ----------------
	public static function FOREX(): string { return self::prefix() . 'forex:list'; }

	// ---------------- 外汇贵金属 ----------------
	public static function METALS(): string { return self::prefix() . 'forex:ug:list'; }

	// ---------------- 加密货币 ----------------
	public static function CRYPTO(): string { return self::prefix() . 'crypto:list'; }
}
