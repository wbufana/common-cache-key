<?php
namespace Common\Cache;

use think\facade\Cache;

/**
 * 统一的缓存访问入口
 * 避免业务层硬编码 Redis key
 */
class CacheHelper
{
	/**
	 * 获取港股股票列表
	 */
	public static function getStockHkList(): array
	{
		return Cache::store('redis_center')->get(CacheName::STOCK_HK()) ?? [];
	}

	/**
	 * 获取美股股票列表
	 */
	public static function getStockUsList(): array
	{
		return Cache::store('redis_center')->get(CacheName::STOCK_US()) ?? [];
	}

	/**
	 * 获取英股股票列表
	 */
	public static function getStockUkList(): array
	{
		return Cache::store('redis_center')->get(CacheName::STOCK_UK()) ?? [];
	}

	/**
	 * 获取印度股票列表
	 */
	public static function getStockInList(): array
	{
		return Cache::store('redis_center')->get(CacheName::STOCK_IN()) ?? [];
	}

	/**
	 * 获取外汇列表
	 */
	public static function getForexList(): array
	{
		return Cache::store('redis_center')->get(CacheName::FOREX()) ?? [];
	}
	/**
	 * 获取外汇贵金属列表
	 */
	public static function getMetalsList(): array
	{
		return Cache::store('redis_center')->get(CacheName::METALS()) ?? [];
	}
	/**
	 * 获取期货列表
	 */
	public static function getFutureList(): array
	{
		return Cache::store('redis_center')->get(CacheName::FUTURE()) ?? [];
	}

	/**
	 * 获取加密货币列表
	 */
	public static function getCryptoList(): array
	{
		return Cache::store('redis_center')->get(CacheName::CRYPTO()) ?? [];
	}
}
