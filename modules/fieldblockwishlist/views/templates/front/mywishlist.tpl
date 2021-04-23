{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{extends file='page.tpl'}
{block name='head_seo'}
    <title>{l s='My wishlist' mod='fieldblockwishlist'}</title>
{/block}
{block name='breadcrumb'}
    {if isset($breadcrumb)}
        <nav class="breadcrumb">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{$breadcrumb.links[0].url}">
                        <span itemprop="name">{$breadcrumb.links[0].title}</span>
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{$link->getModuleLink('fieldblockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}">
                        <span itemprop="name">{l s='My wishlist' mod='fieldblockwishlist'}</span>
                    </a>
                </li>
            </ol>
        </nav>
    {/if}
{/block}
{block name='page_content'}
    <div class="col-sm-12 col-xs-12">
        <div id="mywishlist">
            {if isset($errors) && $errors}
                <div class="alert alert-danger">
                    <p>{if $errors|@count > 1}{l s='There are %d errors' sprintf=$errors|@count}{else}{l s='There is %d error' sprintf=$errors|@count}{/if}</p>
                    <ol>
                        {foreach from=$errors key=k item=error}
                            <li>{$error}</li>
                            {/foreach}
                    </ol>
                    {if isset($smarty.server.HTTP_REFERER) && !strstr($request_uri, 'authentication') && preg_replace('#^https?://[^/]+/#', '/', $smarty.server.HTTP_REFERER) != $request_uri}
                        <p class="lnk"><a class="alert-link" href="#" title="{l s='Back'}">&laquo; {l s='Back'}</a></p>
                    {/if}
                </div>
            {/if}
            {if $id_customer|intval neq 0}
                <form method="post" class="std box" id="form_wishlist">
                    <fieldset>
                        <h3 class="page-subheading">{l s='New wishlist' mod='fieldblockwishlist'}</h3>
                        <div class="form-group">
                            <input type="hidden" name="token" value="{$token|escape:'html':'UTF-8'}" />
                            <input type="text" id="name" name="name" class="inputTxt form-control" value="{if isset($smarty.post.name) and $errors|@count > 0}{$smarty.post.name|escape:'html':'UTF-8'}{/if}" placeholder={l s='Name' mod='fieldblockwishlist'} />
                            <button id="submitWishlist" class="btn btn-default button button-medium" type="submit" name="submitWishlist">
                                <span>{l s='Save' mod='fieldblockwishlist'}</span>
                            </button>
                        </div>
                    </fieldset>
                </form>
                {if $wishlists}
                    <div id="block-history" class="block-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="first_item">{l s='Name' mod='fieldblockwishlist'}</th>
                                    <th class="item mywishlist_first">{l s='Qty' mod='fieldblockwishlist'}</th>
                                    <th class="item mywishlist_first">{l s='Viewed' mod='fieldblockwishlist'}</th>
                                    <th class="item mywishlist_second">{l s='Created' mod='fieldblockwishlist'}</th>
                                    <th class="item mywishlist_second">{l s='Direct Link' mod='fieldblockwishlist'}</th>
                                    <th class="item mywishlist_second">{l s='Default' mod='fieldblockwishlist'}</th>
                                    <th class="last_item mywishlist_first">{l s='Delete' mod='fieldblockwishlist'}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {section name=i loop=$wishlists}
                                    <tr id="wishlist_{$wishlists[i].id_wishlist|intval}">
                                        <td style="width:200px;">
                                            <a href="#" onclick="javascript:event.preventDefault();
                                                    WishlistManage('block-order-detail', '{$wishlists[i].id_wishlist|intval}');">
                                                {$wishlists[i].name|truncate:30:'...'|escape:'htmlall':'UTF-8'}
                                            </a>
                                        </td>
                                        <td class="bold align_center">
                                            {assign var=n value=0}
                                            {foreach from=$nbProducts item=nb name=i}
                                                {if $nb.id_wishlist eq $wishlists[i].id_wishlist}
                                                    {assign var=n value=$nb.nbProducts|intval}
                                                {/if}
                                            {/foreach}
                                            {if $n}
                                                {$n|intval}
                                            {else}
                                                0
                                            {/if}
                                        </td>
                                        <td>{$wishlists[i].counter|intval}</td>
                                        <td>{$wishlists[i].date_add|date_format:"%Y-%m-%d"}</td>
                                        <td>
                                            <a href="#" onclick="javascript:event.preventDefault();
                                                    WishlistManage('block-order-detail', '{$wishlists[i].id_wishlist|intval}');">
                                                {l s='View' mod='fieldblockwishlist'}
                                            </a>
                                        </td>
                                        <td class="wishlist_default">
                                            {if isset($wishlists[i].default) && $wishlists[i].default == 1}
                                                <p class="is_wish_list_default">
                                                    <i class="fa fa-check-square-o"></i>
                                                </p>
                                            {else}
                                                <a href="#" onclick="javascript:event.preventDefault();
                                                        (WishlistDefault('wishlist_{$wishlists[i].id_wishlist|intval}', '{$wishlists[i].id_wishlist|intval}'));">
                                                    <i class="fa fa-square-o"></i>
                                                </a>
                                            {/if}
                                        </td>
                                        <td class="wishlist_delete">
                                            <a class="icon" href="#" onclick="javascript:event.preventDefault();
                                                    return (WishlistDelete('wishlist_{$wishlists[i].id_wishlist|intval}', '{$wishlists[i].id_wishlist|intval}', '{l s='Do you really want to delete this wishlist ?' mod='fieldblockwishlist' js=1}'));">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {/section}
                            </tbody>
                        </table>
                    </div>
                    <div id="block-order-detail">&nbsp;</div>
                {/if}
            {/if}
            <div class="footer_links wishlist_footer clearfix">
                <a class="btn btn-default button button-small pull-left" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">
                    <span>
                        <i class="fa fa-caret-left"></i>
                        {l s='Back to Your Account' mod='fieldblockwishlist'}
                    </span>
                </a>
                <a class="btn btn-default button button-small pull-right" href="#">
                    <span>
                        <i class="fa fa-home"></i>
                        {l s='Home' mod='fieldblockwishlist'}
                    </span>
                </a>
            </div>
        </div>
    </div>
{/block}