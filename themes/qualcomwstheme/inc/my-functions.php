<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function dd( $array ): void {
	echo '<pre>';
	var_dump( $array );
	echo '</pre>';
}
//<div
//            class="text-red-700 py-8 mt-16 h-16 bg-cover text-white sm:mt-28 md:h-72 xl:h-[26rem]"
//            style="background-image:
/*                    url(<?= $pageBannerImage ?>);"*/
//                >
