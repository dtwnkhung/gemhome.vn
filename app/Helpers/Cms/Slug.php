<?php
namespace App\Helpers\Cms;
 
use Illuminate\Support\Facades\DB;
 
class Slug {

    /**
     * @param string slug
     * @return string
     */
    public static function createSlug($table, $newSlug, $id = 0)
    {
        $re = '#(\d+)$#';
        $endNum = preg_match($re, $newSlug, $matches);
        $searchSlug = count($matches) > 0 ? preg_replace($re, '', $newSlug) : $newSlug; 
        $colectSlug = DB::table($table)->select('slug')->where('slug', 'like', $searchSlug.'%')
            ->where('id', '<>', $id)
            ->latest()
            ->pluck('slug'); 
        $allSlugs = $colectSlug->toArray();
        $nextCount = 1;
        $blackList = array_map(function ($item) {
            $e = preg_match('#(\d+)$#', $item, $_m);
            return count($_m) > 0 ? $_m[count($_m) - 1] : 0;
        }, $allSlugs);
        function indexOfBlackList ($test, $list) {
            $res = -1;
            for ($i=0; $i < count($list); $i++) {
                if ((string)$test === (string)$list[$i]) $res = $i;
            }
            return $res;
        }
        for($i = 1; $i < count($allSlugs) + 10; $i++) {
            if (indexOfBlackList($i, $blackList) === -1) {
                $nextCount = $i;
                break;
            }
        }
        if ($searchSlug === $newSlug) {
            $newSlug = $newSlug . '-' . $nextCount;
        } else $newSlug = preg_replace($re, $nextCount, $newSlug);
        return substr($newSlug, 0, 150);
    }
}