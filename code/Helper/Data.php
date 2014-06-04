<?php

class Cm_DiehardSample_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Always render default header generically when caching is active.
     *
     * @param Mage_Page_Block_Html_Welcome $block
     */
    public function welcome(Mage_Page_Block_Html_Welcome $block)
    {
        $block->setData('welcome', Mage::getStoreConfig('design/header/welcome'));
    }

    /**
     * Always render top links generically when caching is active.
     *
     * @param Mage_Page_Block_Template_Links $block
     */
    public function top_links(Mage_Page_Block_Template_Links $block)
    {
        // Replace My Cart (%s items) with My Cart
        $text = Mage::helper('checkout')->__('My Cart');
        $block->removeLinkByUrl($block->getUrl('checkout/cart'));
        $block->addLink($text, 'checkout/cart', $text, true, array(), 50, null, 'class="top-link-cart"');

        // Replace Log Out with Log In
        $before = count($block->getLinks());
        $block->removeLinkByUrl(Mage::helper('customer')->getLogoutUrl());
        if (count($block->getLinks()) != $before) {
            $text = Mage::helper('customer')->__('Log In');
            $block->addLink($text, Mage::helper('customer')->getLoginUrl(), $text, false, array(), 100);
        }
    }

}
