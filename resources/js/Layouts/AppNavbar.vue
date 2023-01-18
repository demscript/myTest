<template>
    <div>
        <div id="top-bar" class="topbar 12">
            <div class="toggle">
                <div class="el-select">
                    <div class="el-input el-input--suffix"><input type="text" autocomplete="off" placeholder="Select"
                            class="el-input__inner"><span class="el-input__suffix"><span
                                class="el-input__suffix-inner"><i
                                    class="el-select__caret el-input__icon el-icon-arrow-up"></i></span></span>
                    </div>
                    <div class="el-select-dropdown el-popper" style="display: none; min-width: 110px;">
                        <div class="el-scrollbar" style="">
                            <div class="el-select-dropdown__wrap el-scrollbar__wrap el-scrollbar__wrap--hidden-default">
                                <ul class="el-scrollbar__view el-select-dropdown__list">
                                    <li class="el-select-dropdown__item selected">
                                        <span>Project</span>
                                    </li>
                                    <li class="el-select-dropdown__item"><span>Setting</span></li>
                                    <li class="el-select-dropdown__item"><span>Snapbyte
                                            Recorder</span></li>
                                    <li class="el-select-dropdown__item"><span>Channels</span></li>
                                    <li class="el-select-dropdown__item"><span>Contacts</span></li>
                                    <li class="el-select-dropdown__item"><span>Analytics</span></li>
                                </ul>
                            </div>
                            <div class="el-scrollbar__bar is-horizontal">
                                <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                            </div>
                            <div class="el-scrollbar__bar is-vertical">
                                <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main_menu" class="">
                <ul role="menubar" class="el-menu-main el-menu--horizontal el-menu">
                    <div class="left" tabindex="0">
                        <li role="menuitem" tabindex="-1" class="el-menu-item logo-item"
                            style="border-bottom-color: transparent; padding-left: 20px;"><a href="/"
                                class="logo-link router-link-active">My Test</a></li>
                    </div>
                    <div class="center" tabindex="0">
                        <div class="side-menu-slider"><a href="/" class="router-link-active"><img alt=""
                                    src="" class="logo"></a>
                            <div class="close-popup"><svg xmlns="http://www.w3.org/2000/svg" width="16.654"
                                    height="16.654" viewBox="235.128 30.673 16.654 16.654">
                                    <g data-name="Close pop up">
                                        <path
                                            d="m245.178 39 6.247 6.247a1.219 1.219 0 0 1-1.723 1.723l-6.247-6.247-6.247 6.247a1.219 1.219 0 1 1-1.723-1.723L241.732 39l-6.247-6.247a1.219 1.219 0 1 1 1.723-1.723l6.247 6.247 6.247-6.247a1.219 1.219 0 1 1 1.723 1.723L245.178 39Z"
                                            fill="#637c8e" fill-rule="evenodd" data-name="Combined-Shape"></path>
                                    </g>
                                </svg></div>
                        </div>
                        <div class="main-sidebar-menu-mobile">
                            <li role="menuitem" tabindex="-1" class="el-menu-item main-menu-item"
                                style="border-bottom-color: transparent;"><a href="">Projects</a><span
                                    class="line"></span></li>
                            <div class="sidebar-main-desktop-view">
                                <li role="menuitem" aria-haspopup="true" class="main-menu-item  el-submenu">
                                    <div class="el-submenu__title" style="border-bottom-color: transparent;"> Tools
                                        &amp; Apps <i class="el-submenu__icon-arrow el-icon-arrow-down"></i></div>
                                    <div class="el-menu--horizontal" style="display: none;">
                                        <ul role="menu" class="el-menu el-menu--popup el-menu--popup-bottom-start">
                                            <div class="sidebar-main-desktop-menu">
                                                <li role="menuitem" tabindex="-1"
                                                    class="el-menu-item main-menu-item submenu-active"><a href=""
                                                        style="font-size: 14px; line-height: 21px;">Snapbyte
                                                        Recorder</a></li>
                                            </div>
                                        </ul>
                                    </div>
                                </li>
                            </div>
                            <div class="sidebar-main-mobile-menu">
                                <li role="menuitem" tabindex="-1"
                                    class="el-menu-item main-menu-item sidebar-main-menu is-active"
                                    style="border-bottom-color: transparent;"><a>Tools &amp;
                                        Apps</a><span class="line"></span><i
                                        class="el-submenu__icon-arrow el-icon-arrow-down"></i></li>
                            </div>
                            <li role="menuitem" tabindex="-1" class="el-menu-item main-menu-item"
                                style="border-bottom-color: transparent;"><a href="">Channels</a><span
                                    class="line"></span></li>
                            <li role="menuitem" tabindex="-1" class="el-menu-item main-menu-item"
                                style="border-bottom-color: transparent;"><a href="">Contacts</a><span
                                    class="line"></span></li>
                            <li role="menuitem" tabindex="-1" class="el-menu-item main-menu-item"
                                style="border-bottom-color: transparent;"><a href="">Analytics</a><span
                                    class="line"></span></li>
                            <li role="menuitem" tabindex="-1" class="el-menu-item main-menu-item"
                                style="border-bottom-color: transparent;"><a href="">Settings</a><span
                                    class="line"></span></li>
                        </div>
                    </div>
                    <div class="right" tabindex="0">
                        <div class="sidebar-main-desktop-view">
                            <li role="menuitem" aria-haspopup="true" class="main-menu-item  el-submenu">
                                <div class="el-submenu__title" style="border-bottom-color: transparent;"> Help <i
                                        class="el-submenu__icon-arrow el-icon-arrow-down"></i></div>
                            </li>
                        </div>
                        <li role="menuitem" aria-haspopup="true" class="profile-menu-item sub-menu el-submenu">
                            <div class="el-submenu__title" style="border-bottom-color: transparent;"><img
                                    src="http://demiogegbo.com/assets/images/img/Demi.JPG"
                                    alt="" width="42" class="profile-avatar">
                                <div class="user-info">
                                    <div class="user-name">Cody Fisher</div>
                                    <div class="user-company"> Cody Fisher@gmail.com </div>
                                </div><i class="el-submenu__icon-arrow el-icon-arrow-down"></i>
                            </div>
                            <div class="el-menu--horizontal" style="display: none;">
                                <ul role="menu" class="el-menu el-menu--popup el-menu--popup-bottom-start"><a
                                        href="/settings" class="">
                                        <li role="menuitem" tabindex="-1" class="el-menu-item text-center"
                                            style="height: auto;"><img
                                                src="http://demiogegbo.com/assets/images/img/Demi.JPG"
                                                alt="" height="60" width="60" class="img-circle row-space-top-2">
                                            <div class="user-identifire"><span></span></div>
                                        </li>
                                    </a><a href="/contacts" class="">
                                        <li role="menuitem" tabindex="-1" class="el-menu-item"><span>Subscribers</span>
                                        </li>
                                    </a><a href="/logout" class="">
                                        <li role="menuitem" tabindex="-1" class="el-menu-item"><span>Logout</span></li>
                                    </a></ul>
                            </div>
                        </li>
                    </div>
                </ul>
                <div class="hamb"></div>
            </div>
        </div>
    </div>
</template>
