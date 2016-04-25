<{* ======== Left & Right Blocks ======== *}>
<{if (!$xoops_showlblock && $xoops_showrblock) || ($xoops_showlblock && !$xoops_showrblock)}>
<{assign var=page value=8}>
<{assign var=column value=4}>
<{/if}>
<{if $xoops_showlblock && $xoops_showrblock}>
<{assign var=page value=6}>
<{assign var=column value=3}>
<{/if}>
<{if !$xoops_showlblock && !$xoops_showrblock}>
<{assign var=page value=12}>
<{assign var=column value=0}>
<{/if}>
<{* ======== Top & Center Blocks ======== *}>
<{if $xoBlocks.page_topleft && $xoBlocks.page_topcenter && $xoBlocks.page_topright}>
<{assign var=topcenter value=4}>
<{assign var=topleft value=4}>
<{assign var=topright value=4}>
<{/if}>
<{if !$xoBlocks.page_topleft && $xoBlocks.page_topcenter && !$xoBlocks.page_topright}>
<{assign var=topcenter value=12}>
<{assign var=topleft value=0}>
<{assign var=topright value=0}>
<{/if}>
<{if $xoBlocks.page_topleft && !$xoBlocks.page_topcenter && !$xoBlocks.page_topright}>
<{assign var=topcenter value=0}>
<{assign var=topleft value=12}>
<{assign var=topright value=0}>
<{/if}>
<{if !$xoBlocks.page_topleft && !$xoBlocks.page_topcenter && $xoBlocks.page_topright}>
<{assign var=topcenter value=0}>
<{assign var=topleft value=0}>
<{assign var=topright value=12}>
<{/if}>
<{if $xoBlocks.page_topleft && !$xoBlocks.page_topcenter && $xoBlocks.page_topright}>
<{assign var=topcenter value=0}>
<{assign var=topleft value=6}>
<{assign var=topright value=6}>
<{/if}>
<{if !$xoBlocks.page_topleft && $xoBlocks.page_topcenter && $xoBlocks.page_topright}>
<{assign var=topcenter value=8}>
<{assign var=topleft value=0}>
<{assign var=topright value=4}>
<{/if}>
<{if $xoBlocks.page_topleft && $xoBlocks.page_topcenter && !$xoBlocks.page_topright}>
<{assign var=topcenter value=8}>
<{assign var=topleft value=4}>
<{assign var=topright value=0}>
<{/if}>
<{* ======== Bottom & Center Blocks ======== *}>
<{if $xoBlocks.page_bottomleft && $xoBlocks.page_bottomcenter && $xoBlocks.page_bottomright}>
<{assign var=bottomcenter value=4}>
<{assign var=bottomleft value=4}>
<{assign var=bottomright value=4}>
<{/if}>
<{if !$xoBlocks.page_bottomleft && $xoBlocks.page_bottomcenter && !$xoBlocks.page_bottomright}>
<{assign var=bottomcenter value=12}>
<{assign var=bottomleft value=0}>
<{assign var=bottomright value=0}>
<{/if}>
<{if $xoBlocks.page_bottomleft && !$xoBlocks.page_bottomcenter && !$xoBlocks.page_bottomright}>
<{assign var=bottomcenter value=0}>
<{assign var=bottomleft value=12}>
<{assign var=bottomright value=0}>
<{/if}>
<{if !$xoBlocks.page_bottomleft && !$xoBlocks.page_bottomcenter && $xoBlocks.page_bottomright}>
<{assign var=bottomcenter value=0}>
<{assign var=bottomleft value=0}>
<{assign var=bottomright value=12}>
<{/if}>
<{if $xoBlocks.page_bottomleft && !$xoBlocks.page_bottomcenter && $xoBlocks.page_bottomright}>
<{assign var=bottomcenter value=0}>
<{assign var=bottomleft value=6}>
<{assign var=bottomright value=6}>
<{/if}>
<{if !$xoBlocks.page_bottomleft && $xoBlocks.page_bottomcenter && $xoBlocks.page_bottomright}>
<{assign var=bottomcenter value=8}>
<{assign var=bottomleft value=0}>
<{assign var=bottomright value=4}>
<{/if}>
<{if $xoBlocks.page_bottomleft && $xoBlocks.page_bottomcenter && !$xoBlocks.page_bottomright}>
<{assign var=bottomcenter value=8}>
<{assign var=bottomleft value=4}>
<{assign var=bottomright value=0}>
<{/if}>
<{* ======== Footer Blocks ======== *}>
<{if $xoBlocks.footer_left && $xoBlocks.footer_center && $xoBlocks.footer_right}>
<{assign var=footercenter value=4}>
<{assign var=footerleft value=4}>
<{assign var=footerright value=4}>
<{/if}>
<{if !$xoBlocks.footer_left && $xoBlocks.footer_center && !$xoBlocks.footer_right}>
<{assign var=footercenter value=12}>
<{assign var=footerleft value=0}>
<{assign var=footerright value=0}>
<{/if}>
<{if $xoBlocks.footer_left && !$xoBlocks.footer_center && !$xoBlocks.footer_right}>
<{assign var=footercenter value=0}>
<{assign var=footerleft value=12}>
<{assign var=footerright value=0}>
<{/if}>
<{if !$xoBlocks.footer_left && !$xoBlocks.footer_center && $xoBlocks.footer_right}>
<{assign var=footercenter value=0}>
<{assign var=footerleft value=0}>
<{assign var=footerright value=12}>
<{/if}>
<{if $xoBlocks.footer_left && !$xoBlocks.footer_center && $xoBlocks.footer_right}>
<{assign var=footercenter value=0}>
<{assign var=footerleft value=6}>
<{assign var=footerright value=6}>
<{/if}>
<{if !$xoBlocks.footer_left && $xoBlocks.footer_center && $xoBlocks.footer_right}>
<{assign var=footercenter value=8}>
<{assign var=footerleft value=0}>
<{assign var=footerright value=4}>
<{/if}>
<{if $xoBlocks.footer_left && $xoBlocks.footer_center && !$xoBlocks.footer_right}>
<{assign var=footercenter value=8}>
<{assign var=footerleft value=4}>
<{assign var=footerright value=0}>
<{/if}>
