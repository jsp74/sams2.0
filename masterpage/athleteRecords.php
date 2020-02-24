<?php
include("./../login/functions.php");
session_start();
gatekeeper("./../login/samslogin.html");
?>

<!DOCTYPE HTML>

<style>
    @media print {
        .user-profile {
            background-color: white;
            height: 100%;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            margin: 0;
            padding: 15px;
            font-size: 14px;
            line-height: 18px;
        }
    }
    body {
        margin-top: 20px;
    }

    .align-center,
    .center {
        text-align: center !important;
    }

    .profile-user-info {
        display: table;
        width: 98%;
        width: calc(100% - 24px);
        margin: 0 auto
    }

    .profile-info-row {
        display: table-row
    }

    .profile-info-name,
    .profile-info-value {
        display: table-cell;
        width: auto;
        border-top: 1px dotted #D5E4F1
    }

    .profile-info-name {
        text-align: right;
        padding: 6px 10px 6px 4px;
        font-weight: 400;
        color: #667E99;
        background-color: transparent;
        width: auto;
        vertical-align: middle;
    }

    .profile-info-value {
        padding: 6px 4px 6px 6px
    }

    .profile-info-value>span+span:before {
        display: inline;
        content: ",";
        margin-left: 1px;
        margin-right: 3px;
        color: #666;
        border-bottom: 1px solid #FFF
    }

    .profile-info-value>span+span.editable-container:before {
        display: none
    }

    .profile-info-row:first-child .profile-info-name,
    .profile-info-row:first-child .profile-info-value {
        border-top: none
    }

    .profile-user-info-striped {
        border: 1px solid #DCEBF7
    }

    .profile-user-info-striped .profile-info-name {
        color: #336199;
        background-color: #EDF3F4;
        border-top: 1px solid #F7FBFF
    }

    .profile-user-info-striped .profile-info-value {
        border-top: 1px dotted #DCEBF7;
        padding-left: 12px
    }

    .profile-picture {
        border: 1px solid #CCC;
        background-color: #FFF;
        padding: 4px;
        display: inline-block;
        max-width: 75%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, .15)
    }

    .user-profile .ace-thumbnails li {
        border: 1px solid #CCC;
        padding: 3px;
        margin: 6px
    }

    .user-profile .ace-thumbnails li .tools {
        left: 3px;
        right: 3px
    }

    .user-profile .ace-thumbnails li:hover .tools {
        bottom: 3px
    }

    .btn-link:hover .ace-icon {
        text-decoration: none !important
    }

    /*.profile-social-links>a:hover>.ace-icon,*/
    .profile-users .memberdiv .name a:hover .ace-icon,
    .profile-users .memberdiv .tools>a:hover {
        text-decoration: none
    }

    .profile-users .user {
        display: block;
        position: static;
        text-align: center;
        width: auto
    }

    .profile-users .user img {
        padding: 2px;
        border-radius: 100%;
        border: 1px solid #AAA;
        max-width: none;
        width: 64px;
        -webkit-transition: all .1s;
        -o-transition: all .1s;
        transition: all .1s
    }

    .profile-users .user img:hover {
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33);
        box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)
    }

    .profile-users .memberdiv {
        background-color: #FFF;
        width: 100px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: none;
        text-align: center;
        margin: 0 8px 24px
    }

    .profile-users .memberdiv .body {
        display: inline-block;
        margin: 8px 0 0
    }

    .profile-users .memberdiv .popover {
        visibility: hidden;
        min-width: 0;
        max-height: 0;
        max-width: 0;
        margin-left: 0;
        margin-right: 0;
        top: -5%;
        left: auto;
        right: auto;
        opacity: 0;
        display: none;
        position: absolute;
        -webkit-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
        -o-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
        transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s
    }

    .profile-users .memberdiv .popover.right {
        left: 100%;
        right: auto;
        display: block
    }

    .profile-users .memberdiv .popover.left {
        left: auto;
        right: 100%;
        display: block
    }

    .profile-users .memberdiv>:first-child:hover .popover {
        visibility: visible;
        opacity: 1;
        z-index: 1060;
        max-height: 250px;
        max-width: 250px;
        min-width: 150px;
        -webkit-transition-delay: 0s;
        -moz-transition-delay: 0s;
        -o-transition-delay: 0s;
        transition-delay: 0s
    }

    .profile-users .memberdiv .tools {
        position: static;
        display: block;
        width: 100%;
        margin-top: 2px
    }

    .profile-users .memberdiv .tools>a {
        margin: 0 2px
    }

    .tab-content.profile-edit-tab-content {
        border: 1px solid #DDD;
        padding: 8px 32px 32px;
        -webkit-box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
        box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
        background-color: #FFF
    }

    @media only screen and (max-width:50%) {
        .profile-info-name {
            width: 200px;
        }

        .profile-user-info-striped .profile-info-name {
            float: none;
            width: auto;
            text-align: left;
            padding: 6px 4px 6px 10px;
            display: block
        }

        .profile-user-info-striped .profile-info-value {
            margin-left: 10px;
            display: block
        }

        .user-profile .memberdiv {
            width: 50%;
            margin-left: 0;
            margin-right: 0
        }
    }

    .itemdiv {
        padding-right: 3px;
        min-height: 66px
    }

    .itemdiv>.user {
        display: inline-block;
        width: 42px;
        position: absolute;
        left: 0
    }

    .itemdiv>.user>.img,
    .itemdiv>.user>img {
        border-radius: 100%;
        border: 2px solid #5293C4;
        max-width: 40px;
        position: relative
    }

    .itemdiv>.user>.img {
        padding: 2px
    }

    .itemdiv>.body {
        width: auto;
        margin-left: 50px;
        margin-right: 12px;
        position: relative
    }

    .itemdiv>.body>.time {
        display: block;
        font-size: 11px;
        font-weight: 700;
        color: #666;
        position: absolute;
        right: 9px;
        top: 0
    }

    .itemdiv>.body>.time .ace-icon {
        font-size: 14px;
        font-weight: 400
    }

    .itemdiv>.body>.name {
        display: block;
        color: #999
    }

    .itemdiv>.body>.name>b {
        color: #777
    }

    .itemdiv>.body>.text {
        display: block;
        position: relative;
        margin-top: 2px;
        padding-bottom: 19px;
        padding-left: 7px;
        font-size: 13px
    }

    .itemdiv.dialogdiv:before,
    .itemdiv.dialogdiv>.body:before,
    .itemdiv>.body>.text:after {
        content: "";
        position: absolute
    }

    .itemdiv>.body>.text:after {
        display: block;
        height: 1px;
        font-size: 0;
        overflow: hidden;
        left: 16px;
        right: -12px;
        margin-top: 9px;
        border-top: 1px solid #E4ECF3
    }

    .itemdiv>.body>.text>.ace-icon:first-child {
        color: #DCE3ED;
        margin-right: 4px
    }

    .itemdiv:last-child>.body>.text {
        border-bottom-width: 0
    }

    .itemdiv:last-child>.body>.text:after {
        display: none
    }

    .itemdiv.dialogdiv {
        padding-bottom: 14px
    }

    .itemdiv.dialogdiv:before {
        display: block;
        top: 0;
        bottom: 0;
        left: 19px;
        width: 3px;
        max-width: 3px;
        background-color: #E1E6ED;
        border: 1px solid #D7DBDD;
        border-width: 0 1px
    }

    .itemdiv.dialogdiv:last-child {
        padding-bottom: 0
    }

    .itemdiv.dialogdiv:last-child:before {
        display: none
    }

    .itemdiv.dialogdiv>.user>img {
        border-color: #C9D6E5
    }

    .itemdiv.dialogdiv>.body {
        border: 1px solid #DDE4ED;
        padding: 5px 8px 8px;
        border-left-width: 2px;
        margin-right: 1px
    }

    .itemdiv.dialogdiv>.body:before {
        display: block;
        left: -7px;
        top: 11px;
        width: 8px;
        height: 8px;
        border: 2px solid #DDE4ED;
        border-width: 2px 0 0 2px;
        background-color: #FFF;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .itemdiv.dialogdiv>.body>.time {
        position: static;
        float: right
    }

    .itemdiv.dialogdiv>.body>.text {
        padding-left: 0;
        padding-bottom: 0
    }

    .itemdiv.dialogdiv>.body>.text:after {
        display: none
    }

    .itemdiv.dialogdiv .tooltip-inner {
        word-break: break-all
    }

    .itemdiv.memberdiv {
        width: 175px;
        padding: 2px;
        margin: 3px 0;
        float: left;
        border-bottom: 1px solid #E8E8E8
    }

    @media (min-width:992px) {
        .itemdiv.memberdiv {
            max-width: 50%
        }
    }

    @media (max-width:991px) {
        .itemdiv.memberdiv {
            min-width: 33.333%
        }
    }

    .itemdiv.memberdiv>.user>img {
        border-color: #DCE3ED
    }

    .itemdiv.memberdiv>.body>.time {
        position: static
    }

    .itemdiv.memberdiv>.body>.name {
        line-height: 18px;
        height: 18px;
        margin-bottom: 0
    }

    .itemdiv.memberdiv>.body>.name>a {
        display: inline-block;
        max-width: 100px;
        max-height: 18px;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-all
    }

    .itemdiv .tools {
        position: absolute;
        right: 5px;
        bottom: 10px;
        display: none
    }

    .item-list>li>.checkbox,
    .item-list>li>label.inline,
    .itemdiv:hover .tools {
        display: inline-block
    }

    .itemdiv .tools .btn {
        border-radius: 36px;
        margin: 1px 0
    }

    .itemdiv .body .tools {
        bottom: 4px
    }

    .itemdiv.commentdiv .tools {
        right: 9px
    }

    .ace-thumbnails>li,
    .ace-thumbnails>li>:first-child {
        display: block;
        position: relative
    }

    .ace-thumbnails {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .ace-thumbnails>li {
        float: left;
        overflow: hidden;
        margin: 2px;
        border: 2px solid #333
    }

    .ace-thumbnails>li>:first-child:focus {
        outline: 0
    }

    .ace-thumbnails>li .tags {
        display: inline-block;
        position: absolute;
        bottom: 0;
        right: 0;
        overflow: visible;
        direction: rtl;
        padding: 0;
        margin: 0;
        height: auto;
        width: auto;
        background-color: transparent;
        border-width: 0;
        vertical-align: inherit
    }

    .ace-thumbnails>li .tags>.label-holder {
        opacity: .92;
        filter: alpha(opacity=92);
        display: table;
        margin: 1px 0 0;
        direction: ltr;
        text-align: left
    }

    .ace-thumbnails>li>.tools,
    .ace-thumbnails>li>:first-child>.text {
        position: absolute;
        text-align: center;
        background-color: rgba(0, 0, 0, .55)
    }

    .ace-thumbnails>li .tags>.label-holder:hover {
        opacity: 1;
        filter: alpha(opacity=100)
    }

    .ace-thumbnails>li>.tools {
        top: 0;
        bottom: 0;
        left: -30px;
        width: 24px;
        vertical-align: middle;
        -webkit-transition: all .2s ease;
        -o-transition: all .2s ease;
        transition: all .2s ease
    }

    .ace-thumbnails>li>.tools.tools-right {
        left: auto;
        right: -30px
    }

    .ace-thumbnails>li>.tools.tools-bottom {
        width: auto;
        height: 28px;
        left: 0;
        right: 0;
        top: auto;
        bottom: -30px
    }

    .ace-thumbnails>li>.tools.tools-top {
        width: auto;
        height: 28px;
        left: 0;
        right: 0;
        top: -30px;
        bottom: auto
    }

    .ace-thumbnails>li:hover>.tools {
        left: 0;
        right: 0
    }

    .ace-thumbnails>li:hover>.tools.tools-bottom {
        top: auto;
        bottom: 0
    }

    .ace-thumbnails>li:hover>.tools.tools-top {
        bottom: auto;
        top: 0
    }

    .ace-thumbnails>li:hover>.tools.tools-right {
        left: auto;
        right: 0
    }

    .ace-thumbnails>li>.in.tools {
        left: 0;
        right: 0
    }

    .ace-thumbnails>li>.in.tools.tools-bottom {
        top: auto;
        bottom: 0
    }

    .ace-thumbnails>li>.in.tools.tools-top {
        bottom: auto;
        top: 0
    }

    .ace-thumbnails>li>.in.tools.tools-right {
        left: auto;
        right: 0
    }

    .ace-thumbnails>li>.tools>a,
    .ace-thumbnails>li>:first-child .inner a {
        display: inline-block;
        color: #FFF;
        font-size: 18px;
        font-weight: 400;
        padding: 0 4px
    }

    .ace-thumbnails>li>.tools>a:hover,
    .ace-thumbnails>li>:first-child .inner a:hover {
        text-decoration: none;
        color: #C9E2EA
    }

    .ace-thumbnails>li .tools.tools-bottom>a,
    .ace-thumbnails>li .tools.tools-top>a {
        display: inline-block
    }

    .ace-thumbnails>li>:first-child>.text {
        right: 0;
        left: 0;
        bottom: 0;
        top: 0;
        color: #FFF;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all .2s ease;
        -o-transition: all .2s ease;
        transition: all .2s ease
    }

    .itemdiv {
        position: relative
    }

    .ace-thumbnails>li>:first-child>.text:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: 0
    }

    .ace-thumbnails>li>:first-child>.text>.inner {
        padding: 4px 0;
        margin: 0;
        display: inline-block;
        vertical-align: middle;
        max-width: 90%
    }

    .ace-thumbnails>li:hover>:first-child>.text {
        opacity: 1;
        filter: alpha(opacity=100)
    }

    @media only screen and (max-width:480px) {
        .ace-thumbnails {
            text-align: center
        }

        .ace-thumbnails>li {
            float: none;
            display: inline-block
        }
    }

    .tab-content {
        border: 1px solid #C5D0DC;
        padding: 16px 12px;
        position: relative
    }

    .tab-content.no-padding {
        padding: 0
    }

    .tab-content.no-border {
        border: none;
        padding: 12px
    }

    .tab-content.padding-32 {
        padding: 32px 24px
    }

    .tab-content.no-border.padding-32 {
        padding: 32px
    }

    .tab-content.padding-30 {
        padding: 30px 23px
    }

    .tab-content.no-border.padding-30 {
        padding: 30px
    }

    .tab-content.padding-28 {
        padding: 28px 21px
    }

    .tab-content.no-border.padding-28 {
        padding: 28px
    }

    .tab-content.padding-26 {
        padding: 26px 20px
    }

    .tab-content.no-border.padding-26 {
        padding: 26px
    }

    .tab-content.padding-24 {
        padding: 24px 18px
    }

    .tab-content.no-border.padding-24 {
        padding: 24px
    }

    .tab-content.padding-22 {
        padding: 22px 17px
    }

    .tab-content.no-border.padding-22 {
        padding: 22px
    }

    .tab-content.padding-20 {
        padding: 20px 15px
    }

    .tab-content.no-border.padding-20 {
        padding: 20px
    }

    .tab-content.padding-18 {
        padding: 18px 14px
    }

    .tab-content.no-border.padding-18 {
        padding: 18px
    }

    .tab-content.padding-16 {
        padding: 16px 12px
    }

    .tab-content.no-border.padding-16 {
        padding: 16px
    }

    .tab-content.padding-14 {
        padding: 14px 11px
    }

    .tab-content.no-border.padding-14 {
        padding: 14px
    }

    .tab-content.padding-12 {
        padding: 12px 9px
    }

    .tab-content.no-border.padding-12 {
        padding: 12px
    }

    .tab-content.padding-10 {
        padding: 10px 8px
    }

    .tab-content.no-border.padding-10 {
        padding: 10px
    }

    .tab-content.padding-8 {
        padding: 8px 6px
    }

    .tab-content.no-border.padding-8 {
        padding: 8px
    }

    .tab-content.padding-6 {
        padding: 6px 5px
    }

    .tab-content.no-border.padding-6 {
        padding: 6px
    }

    .tab-content.padding-4 {
        padding: 4px 3px
    }

    .tab-content.no-border.padding-4 {
        padding: 4px
    }

    .tab-content.no-border.padding-2,
    .tab-content.padding-2 {
        padding: 2px
    }

    .tab-content.no-border.padding-0,
    .tab-content.padding-0 {
        padding: 0
    }


    .nav.nav-tabs.padding-28 {
        padding-left: 28px
    }

    .tabs-left>.nav.nav-tabs.padding-28,
    .tabs-right>.nav.nav-tabs.padding-28 {
        padding-left: 0;
        padding-top: 28px
    }

    .nav.nav-tabs.padding-26 {
        padding-left: 26px
    }

    .tabs-left>.nav.nav-tabs.padding-26,
    .tabs-right>.nav.nav-tabs.padding-26 {
        padding-left: 0;
        padding-top: 26px
    }

    .nav.nav-tabs.padding-24 {
        padding-left: 24px
    }

    .tabs-left>.nav.nav-tabs.padding-24,
    .tabs-right>.nav.nav-tabs.padding-24 {
        padding-left: 0;
        padding-top: 24px
    }

    .nav.nav-tabs.padding-22 {
        padding-left: 22px
    }

    .tabs-left>.nav.nav-tabs.padding-22,
    .tabs-right>.nav.nav-tabs.padding-22 {
        padding-left: 0;
        padding-top: 22px
    }

    .nav.nav-tabs.padding-20 {
        padding-left: 20px
    }

    .tabs-left>.nav.nav-tabs.padding-20,
    .tabs-right>.nav.nav-tabs.padding-20 {
        padding-left: 0;
        padding-top: 20px
    }

    .nav.nav-tabs.padding-18 {
        padding-left: 18px
    }

    .tabs-left>.nav.nav-tabs.padding-18,
    .tabs-right>.nav.nav-tabs.padding-18 {
        padding-left: 0;
        padding-top: 18px
    }

    .nav.nav-tabs.padding-16 {
        padding-left: 16px
    }

    .tabs-left>.nav.nav-tabs.padding-16,
    .tabs-right>.nav.nav-tabs.padding-16 {
        padding-left: 0;
        padding-top: 16px
    }

    .nav.nav-tabs.padding-14 {
        padding-left: 14px
    }

    .tabs-left>.nav.nav-tabs.padding-14,
    .tabs-right>.nav.nav-tabs.padding-14 {
        padding-left: 0;
        padding-top: 14px
    }

    .nav.nav-tabs.padding-12 {
        padding-left: 12px
    }

    .tabs-left>.nav.nav-tabs.padding-12,
    .tabs-right>.nav.nav-tabs.padding-12 {
        padding-left: 0;
        padding-top: 12px
    }

    .nav.nav-tabs.padding-10 {
        padding-left: 10px
    }

    .tabs-left>.nav.nav-tabs.padding-10,
    .tabs-right>.nav.nav-tabs.padding-10 {
        padding-left: 0;
        padding-top: 10px
    }

    .nav.nav-tabs.padding-8 {
        padding-left: 8px
    }

    .tabs-left>.nav.nav-tabs.padding-8,
    .tabs-right>.nav.nav-tabs.padding-8 {
        padding-left: 0;
        padding-top: 8px
    }

    .nav.nav-tabs.padding-6 {
        padding-left: 6px
    }

    .tabs-left>.nav.nav-tabs.padding-6,
    .tabs-right>.nav.nav-tabs.padding-6 {
        padding-left: 0;
        padding-top: 6px
    }

    .nav.nav-tabs.padding-4 {
        padding-left: 4px
    }

    .tabs-left>.nav.nav-tabs.padding-4,
    .tabs-right>.nav.nav-tabs.padding-4 {
        padding-left: 0;
        padding-top: 4px
    }

    .nav.nav-tabs.padding-2 {
        padding-left: 2px
    }

    .tabs-left>.nav.nav-tabs.padding-2,
    .tabs-right>.nav.nav-tabs.padding-2 {
        padding-left: 0;
        padding-top: 2px
    }

    .nav-tabs {
        border-color: #C5D0DC;
        margin-bottom: 0 !important;
        position: relative;
        top: 1px
    }

    .nav-tabs>li>a {
        padding: 7px 12px 8px
    }

    .nav-tabs>li>a,
    .nav-tabs>li>a:focus {
        border-radius: 0 !important;
        border-color: #C5D0DC;
        background-color: #F9F9F9;
        color: #999;
        margin-right: -1px;
        line-height: 18px;
        position: relative
    }

    .nav-tabs>li>a:hover {
        background-color: #FFF;
        color: #4C8FBD;
        border-color: #C5D0DC
    }

    .nav-tabs>li>a:active,
    .nav-tabs>li>a:focus {
        outline: 0 !important
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        color: #576373;
        border-color: #C5D0DC #C5D0DC transparent;
        border-top: 2px solid #4C8FBD;
        background-color: #FFF;
        z-index: 1;
        line-height: 18px;
        margin-top: -1px;
        box-shadow: 0 -2px 3px 0 rgba(0, 0, 0, .15)
    }

    .tabs-below>.nav-tabs {
        top: auto;
        margin-bottom: 0;
        margin-top: -1px;
        border-color: #C5D0DC;
        border-bottom-width: 0
    }

    .tabs-below>.nav-tabs>li>a,
    .tabs-below>.nav-tabs>li>a:focus,
    .tabs-below>.nav-tabs>li>a:hover {
        border-color: #C5D0DC
    }

    .tabs-below>.nav-tabs>li.active>a,
    .tabs-below>.nav-tabs>li.active>a:focus,
    .tabs-below>.nav-tabs>li.active>a:hover {
        border-color: transparent #C5D0DC #C5D0DC;
        border-top-width: 1px;
        border-bottom: 2px solid #4C8FBD;
        margin-top: 0;
        box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .15)
    }

    .tabs-left>.nav-tabs>li>a,
    .tabs-right>.nav-tabs>li>a {
        min-width: 60px
    }

    .tabs-left>.nav-tabs {
        top: auto;
        margin-bottom: 0;
        border-color: #C5D0DC;
        float: left
    }

    .tabs-left>.nav-tabs>li {
        float: none !important
    }

    .tabs-left>.nav-tabs>li>a,
    .tabs-left>.nav-tabs>li>a:focus,
    .tabs-left>.nav-tabs>li>a:hover {
        border-color: #C5D0DC;
        margin: 0 -1px 0 0
    }

    .tabs-left>.nav-tabs>li.active>a,
    .tabs-left>.nav-tabs>li.active>a:focus,
    .tabs-left>.nav-tabs>li.active>a:hover {
        border-color: #C5D0DC transparent #C5D0DC #C5D0DC;
        border-top-width: 1px;
        border-left: 2px solid #4C8FBD;
        margin: 0 -1px;
        -webkit-box-shadow: -2px 0 3px 0 rgba(0, 0, 0, .15) !important;
        box-shadow: -2px 0 3px 0 rgba(0, 0, 0, .15) !important
    }

    .tabs-right>.nav-tabs {
        top: auto;
        margin-bottom: 0;
        border-color: #C5D0DC;
        float: right
    }

    .tabs-right>.nav-tabs>li {
        float: none !important
    }

    .tabs-right>.nav-tabs>li>a,
    .tabs-right>.nav-tabs>li>a:focus,
    .tabs-right>.nav-tabs>li>a:hover {
        border-color: #C5D0DC;
        margin: 0 -1px
    }

    .tabs-right>.nav-tabs>li.active>a,
    .tabs-right>.nav-tabs>li.active>a:focus,
    .tabs-right>.nav-tabs>li.active>a:hover {
        border-color: #C5D0DC #C5D0DC #C5D0DC transparent;
        border-top-width: 1px;
        border-right: 2px solid #4C8FBD;
        margin: 0 -2px 0 -1px;
        -webkit-box-shadow: 2px 0 3px 0 rgba(0, 0, 0, .15);
        box-shadow: 2px 0 3px 0 rgba(0, 0, 0, .15)
    }

    .nav-tabs>li>a .badge {
        padding: 1px 5px;
        line-height: 15px;
        opacity: .75;
        vertical-align: initial
    }

    .nav-tabs>li>a .ace-icon {
        opacity: .75
    }

    .nav-tabs>li.active>a .ace-icon,
    .nav-tabs>li.active>a .badge {
        opacity: 1
    }

    .nav-tabs li .ace-icon {
        width: 1.25em;
        display: inline-block;
        text-align: center
    }

    .nav-tabs>li.open .dropdown-toggle {
        background-color: #4F99C6;
        border-color: #4F99C6;
        color: #FFF
    }

    .nav-tabs>li.open .dropdown-toggle>.ace-icon {
        color: #FFF !important
    }

    .tabs-left .tab-content,
    .tabs-right .tab-content {
        overflow: auto
    }

    .red {
        color: #DD5A43 !important
    }

    .blue {
        color: #478FCA !important
    }

    .navbar {
        border-radius: 0 !important;
    }

    /*
body{
    background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
}*/

    .jumbotron {
        background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        box-shadow: inset 0px 0px 5px 1px rgba(0, 0, 0, 0.3);
        margin-bottom: 0 !important;
    }

    .heading {
        text-align: center;
        font-weight: bold;
        font-family: 'Do Hyeon', sans-serif;
    }

    .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 10px;
        border: none;
        text-align: left;
        outline: none;
        font-size: 20px;
        width: 100%;
    }

    .collapsible:hover {
        background-color: #555;
    }

    .content {
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
        border: none;
        outline: none;
    }

    .sportIcon {
        height: 25px;
        width: 25px;
    }

    .list-group.list-group-horizontal {
        display: flex;
        flex-direction: row;
    }
</style>
<title>Athlete Information | SAMS</title>

<body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">

    <div class="jumbotron">
        <center><strong>
                <h1>Athlete Information</h1>
            </strong></center>
    </div>


    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="./../SAMShome.php" style="color: #B3DA2E;">Dashboard</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <!-- ALll nav-pages under this nav-bar is moved to masterpage folder -->
                <!-- Pages commeted out will be taken care og eventually as the project moves forward -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Master Page <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a id = "master_file" href="masterpage/masterfile.html">Master Help File</a></li>
                        <li><a id = "how_to" href="masterpage/howto.html">How to do it</a></li> -->
                        <li><a id="register_form" href="registrationform.php">Registration Form</a></li>
                        <li><a id="find_register" href="findregistration.php">Find All Registration</a></li>
                        <li><a id="setup_pref" href="setupmaster.php">Setup Master Preferences</a></li>
                        <!-- <li><a id = "athlete_perform_record" href = "masterpage/athleteperform.html">Athlete Performance Records</a></li>
                        <li><a id = "qualifying_std" href = "masterpage/qualifyingstand.html">Qualifying Standards</a></li>
                        <li><a id = "set_relay" href = "masterpage/setrelay.html">Set Relay Points</a></li>
                        <li><a id = "see_credit" href = "masterpage/seecreditscreen.html">See Credit Screen</a></li>
                        <li><a id = "photo_database" href = "masterpage/photodatabase.html">Photo Database</a></li>
                        <li><a id = "classification" href = "masterpage/classificationfile.html">Classification file</a></li>
                        <li><a id = "Implements" href = "masterpage/implementsusedfile.html">Implements used file</a></li>
                        <li><a id = "pentathion" href = "masterpage/performancepointssetup.html">Performance Points Setup</a></li> -->
                    </ul>
                </li>

                <!-- ALll nav-pages under this nav-bar is moved to resultpage folder -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Result International Format <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="extrackfield" href="./../resultpage/exporttrack.html">Export Track &amp; Field</a></li>
                        <li><a id="exswimming" href="./../resultpage/exportswimming.html">Export Swimming</a></li>
                    </ul>
                </li>

                <!-- ALll nav-pages under this nav-bar is moved to preferences folder -->

                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Preferences <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id = "backup" href="preferences/backuppreferences.html">Backup Preferences</a></li>
                        <li><a id = "restore" href="preferences/restorepreferences.html">Restore Preferences</a></li>
                    </ul>
                </li> -->

                <!-- All the Sports -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sports <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="archery" href="./../sports/sportsTable.php?sport=archery">Archery</a></li>
                        <li><a id="fencing" href="./../sports/sportsTable.php?sport=fencing">Fencing</a></li>
                        <li><a id="field" href="./../sports/sportsTable.php?sport=field">Field</a></li>
                        <li><a id="swimming" href="./../sports/sportsTable.php?sport=swim">Swimming</a></li>
                        <li><a id="tabletennis" href="./../sports/sportsTable.php?sport=tableTennis">Table Tennis</a></li>
                        <li><a id="teamsports" href="./../sports/sportsTable.php?sport=teams">Team Sports</a></li>
                        <li><a id="track" href="./../sports/sportsTable.php?sport=track">Track</a></li>
                        <li><a id="weightlifting" href="./../sports/sportsTable.php?sport=weightlifting">Weightlifting</a></li>
                        <li><a id="other" href="./../sports/sportsTable.php?sport=other">Other Sports</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right dropdown">
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./../login/logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <button id="arrow" onclick="back()">Back</button>
        <button id="arrow" onclick="next()">next</button>

        <div id="user-profile-2" class="user-profile">
            <div class="tabbable">
                <ul class="nav nav-tabs padding-18">
                    <li class="active">
                        <a data-toggle="tab" href="#home">
                            <i class="ace-icon fa fa-user bigger-110"></i>
                            Athlete
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#sports">
                            <i class="ace-icon fa fa-users bigger-110"></i>
                            Sports
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#pictures">
                            <i class="ace-icon fa fa-picture-o bigger-110"></i>
                            Pictures
                        </a>
                    </li>
                </ul>

                <div class="tab-content no-border padding-24">
                    <div id="home" class="tab-pane in active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 center">
                                <span class="profile-picture">
                                    <img class="img-responsive" alt=" Avatar" id="avatar2" src="images/portrait.png">
                                    <!-- https://cdn3.iconfinder.com/data/icons/sympletts-part-3/128/circle-user-2-512.png -->
                                </span>

                                <div class="space space-4"></div>

                                <a id="hrefCall" href="#" class="btn btn-sm btn-block btn-info">
                                    <span class="bigger-100" id="call">Phone Number Not Provided</span>
                                </a>
                                <a id="hrefEmail" href="#" class="btn btn-sm btn-block btn-primary">
                                    <span class="bigger-100" id="email">Email Not Provided</span>
                                </a>
                                <a id="hrefAddress" href="#" target="_blank" class="btn btn-sm btn-block btn-success btn-group">
                                    <span class="bigger-100" id="address">Address Not Provided</span>
                                </a>
                            </div><!-- /.col -->

                            <div class="col-xs-12 col-sm-9">

                                <h4 class="blue">
                                    <span id="names">Name Not Provided</span>
                                    <button style="float: right" onclick="printDiv()" type="button">Print</button>
                                </h4>

                                <div class="button">
                                    <a id="editProfile" href="registrationUpdate.php"> EDIT PROFILE </a>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="profile-user-info">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> DSO </div>
                                            <div class="profile-info-value">
                                                <span id="dso">DSO Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Gender </div>
                                            <div class="profile-info-value">
                                                <span id="gender">Gender Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Date of Birth </div>
                                            <div class="profile-info-value">
                                                <span id="dob">Date of Birth Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Age </div>
                                            <div class="profile-info-value">
                                                <span id="age">Age Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> T-Shirt Size </div>
                                            <div class="profile-info-value">
                                                <span id="tsize">TShirt Size Not Provided</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="profile-user-info">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> ID </div>
                                            <div class="profile-info-value">
                                                <span id="id">ID Number Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Registration Number </div>
                                            <div class="profile-info-value">
                                                <span id="regNumber">Registration Number Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Bib Number </div>
                                            <div class="profile-info-value">
                                                <span id="bibNumber">Bib Number Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Membership Number </div>
                                            <div class="profile-info-value">
                                                <span id="memNumber">Membership Number Not Provided</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> IPC Number </div>
                                            <div class="profile-info-value">
                                                <span id="ipcNumber">IPC Number Not Provided</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /#home -->

                    <div id="sports" class="tab-pane">
                        <div class="profile-users clearfix row">

                            <div class="col-xs-12 col-sm-3 center">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Head Coach </div>
                                    <div class="profile-info-value">
                                        <span id="hcName">Coach Not Provided</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Team Name </div>
                                    <div class="profile-info-value">
                                        <span id="teamName">Team Name Not Provided</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Coach Phone </div>
                                    <div class="profile-info-value" href="#">
                                        <a id="hrefHcPhone" href="#"><span id="hcPhone">Phone Not Provided</span></a>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Coach Email </div>
                                    <div class="profile-info-value">
                                        <a id="hrefHcEmail" href="#"><span id="hcEmail">Email Not Provided</span></a>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Classified? </div>
                                    <div class="profile-info-value">
                                        <span id="classified">No</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Coach Coming? </div>
                                    <div class="profile-info-value">
                                        <span id="coachPresence">No</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-9 center">
                                <div id="noSports">No Sports to Display</div>
                                <div id="archery" style="display: none;">
                                    <button class="collapsible">
                                        <img src="images/archery.png" class="sportIcon" />
                                        Archery
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT ARCHERY</p>
                                    </div>
                                </div>

                                <div id="fencing" style="display: none;">
                                    <button class="collapsible">
                                        <img src="images/fencing.png" class="sportIcon" />
                                        Fencing
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT FENCING</p>
                                    </div>
                                </div>

                                <div id="field" style="display: none;">
                                    <button class="collapsible">
                                        <img src="images/field.png" class="sportIcon" />
                                        Field
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT FIELD</p>
                                    </div>
                                </div>

                                <div id="swim" style="display: none;">
                                    <button class="collapsible">
                                        <img src="images/swim.png" class="sportIcon" />
                                        Swim
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT SWIM</p>
                                    </div>
                                </div>

                                <div id="tableTennis" style="display: none">
                                    <button class="collapsible">
                                        <img src="images/tableTennis.png" class="sportIcon" />
                                        Table Tennis
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT TABLE TENNIS</p>
                                    </div>
                                </div>


                                <div id="teams" style="display: none">
                                    <button class="collapsible">
                                        <img src="images/teams.png" class="sportIcon" />
                                        Teams
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT TEAMS</p>
                                    </div>
                                </div>

                                <div id="track" style="display: none">
                                    <button class="collapsible">
                                        <img src="images/track.png" class="sportIcon" />
                                        Track
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT TRACK</p>
                                    </div>
                                </div>

                                <div id="weightlifting" style="display: none">
                                    <button class="collapsible">
                                        <img src="images/weightlifting.png" class="sportIcon" />
                                        Weightlifting
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT WEIGHTLIFTING</p>
                                    </div>
                                </div>

                                <div id="other" style="display: none">
                                    <button class="collapsible">
                                        <img src="images/other.png" class="sportIcon" />
                                        Other
                                    </button>
                                    <div class="content">
                                        <p>INFO ABOUT OTHER SPORTS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /#sports -->

                    <div id="pictures" class="tab-pane">
                        <ul class="ace-thumbnails">
                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/2/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/3/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/4/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/5/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/6/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/7/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>

                            <li>
                                <a href="#" data-rel="colorbox">
                                    <img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
                                    <div class="text">
                                        <div class="inner">Sample Caption on Hover</div>
                                    </div>
                                </a>

                                <div class="tools tools-bottom">
                                    <a href="#">
                                        <i class="ace-icon fa fa-link"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-paperclip"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-pencil"></i>
                                    </a>

                                    <a href="#">
                                        <i class="ace-icon fa fa-times red"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- /#pictures -->
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">

    let coll = document.getElementsByClassName("collapsible");
    let num = 1;
    console.log(coll);
    //For the Sports Section Collapsible
    for (i = 0; i < coll.length; i++) {

        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }

    //Grabs the Data.csv file
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "2018_Jr_Nationals_registrations_only_TF.csv",
            dataType: "text",
            success: function(data) {
                populateForm(data);
            }
        });
    });
    
    
    class athlete {
        constructor(reg,Fname,Lname, gender, DOB, address1, address2, city, state, zipcode, country, homephone, email, memberNumber, teamName, agetrkfld, 
                    trclass, trevent1, trev1mark, trevent2, trev2mark, trevent3, trev3mark, trevent4, trev4mark, trevent5, trev5mark, trevent6, 
                    trev6mark, trevent7, trev7mark, trevent8, trev8mark, fifieldclass, fievent1, fiev1mark, fievent2, fiev2mark, fievent3, 
                    fiev3mark, fievent4, fiev4mark, fievent5, fiev5mark, fievent6, fiev6mark, fievent7, fiev7mark, fievent8, fiev8mark) {
            this.reg = reg;
            this.Fname = Fname;
            this.Lname = Lname;
            this.gender = gender;
            this.DOB = DOB;
            this.address1 = address1;
            this.address2 = address2;
            this.city = city;
            this.state = state;
            this.zipcode = zipcode;
            this.country = country;
            this.homephone = homephone;
            this.email = email;
            this.memberNumber = memberNumber;
            this.teamName = teamName;
            this.agetrkfld = agetrkfld;
            this.trclass = trclass;
            this.trevent1 = trevent1;
            this.trev1mark = trev1mark;
            this.trevent2 = trevent2;
            this.trev2mark = trev2mark;
            this.trevent3 = trevent3;
            this.trev3mark = trev3mark;
            this.trevent4 = trevent4;
            this.trev4mark = trev4mark;
            this.trevent5 = trevent5;
            this.trev5mark = trev5mark;
            this.trevent6 = trevent6;
            this.trev6mark = trev6mark;
            this.trevent7 = trevent7;
            this.trev7mark = trev7mark;
            this.trevent8 = trevent8;
            this.trev8mark = trev8mark;
            this.fifieldclass = fifieldclass;
            this.fievent1 = fievent1;
            this.fiev1mark = fiev1mark;
            this.fievent2 = fievent2;
            this.fiev2mark = fiev2mark;
            this.fievent3 = fievent3;
            this.fiev3mark = fiev3mark;
            this.fievent4 = fievent4;
            this.fiev4mark = fiev4mark;
            this.fievent5 = fievent5;
            this.fiev5mark = fiev5mark;
            this.fievent6 = fievent6;
            this.fiev6mark = fiev6mark;
            this.fievent7 = fievent7;
            this.fiev7mark = fiev7mark;
            this.fievent8 = fievent8;
            this.fiev8mark = fiev8mark;
        }
    }
    let athletes = [];
   
    let regIndex,FnameIndex, LnameIndex, genderIndex, DOBIndex, address1Index, address2Index, cityIndex, stateIndex, zipcodeIndex, countryIndex, homephoneIndex, emailIndex, memberNumberIndex, teamNameIndex, agetrkfldIndex;
    let trclassIndex, trevent1Index, trev1markIndex, trevent2Index, trev2markIndex, trevent3Index, trev3markIndex, trevent4Index, trev4markIndex, trevent5Index, trev5markIndex, trevent6Index;
    let trev6markIndex, trevent7Index, trev7markIndex, trevent8Index, trev8markIndex, fifieldclassIndex, fievent1Index, fiev1markIndex, fievent2Index, fiev2markIndex, fievent3Index;
    let fiev3markIndex, fievent4Index, fiev4markIndex, fievent5Index, fiev5markIndex, fievent6Index, fiev6markIndex, fievent7Index, fiev7markIndex, fievent8Index, fiev8markIndex;
     
    //Function populates the page with the athlete's information
    function populateForm(data) {
        
        let lines = data.split(/\r\n|\n/); 
        let colNames = []
        let check = []
        for(let i = 0; i < lines.length; i++){
            colNames[i] = lines[i].split(',');
        }
        console.log(colNames)

        for(let row = 0; row < 1; row++){
            check[row] = lines[row].split(',');
            for(let column = 0; column < check[0].length; column++){
                if(check[row][column].toLowerCase() == "regfor"){
                    regIndex = column;
                }else if(check[row][column].toLowerCase() == "firstname"){
                    FnameIndex = column;
                }else if(check[row][column].toLowerCase() == "lastname"){
                    LnameIndex = column;
                }else if(check[row][column].toLowerCase() == "gender"){
                    genderIndex = column;
                }else if(check[row][column].toLowerCase() == "dob"){
                    DOBIndex = column;
                }else if(check[row][column].toLowerCase() == "address1"){
                    address1Index = column;
                }else if(check[row][column].toLowerCase() == "address2"){
                    address2Index = column;
                }else if(check[row][column].toLowerCase() == "city"){
                    cityIndex = column;
                }else if(check[row][column].toLowerCase() == "state"){
                    stateIndex = column;
                }else if(check[row][column].toLowerCase() == "zipcode"){
                    zipcodeIndex = column;
                }else if(check[row][column].toLowerCase() == "country"){
                    countryIndex = column;
                }else if(check[row][column].toLowerCase() == "homephone"){
                    homephoneIndex = column;
                }else if(check[row][column].toLowerCase() == "email"){
                    emailIndex = column;
                }else if(check[row][column].toLowerCase() == "membernumber"){
                    memberNumberIndex = column;
                }else if(check[row][column].toLowerCase() == "teamname"){
                    teamNameIndex = column;
                }else if(check[row][column].toLowerCase() == "agetrkfld"){
                    agetrkfldIndex = column;
                }else if(check[row][column].toLowerCase() == "trclass"){
                    trclassIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent1"){
                    trevent1Index = column;
                }else if(check[row][column].toLowerCase() == "trev1mark"){
                    trev1markIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent2"){
                    trevent2Index = column;
                }else if(check[row][column].toLowerCase() == "trev2mark"){
                    trev2markIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent3"){
                    trevent3Index = column;
                }else if(check[row][column].toLowerCase() == "trev3mark"){
                    trev3markIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent4"){
                    trevent4Index = column;
                }else if(check[row][column].toLowerCase() == "trev4mark"){
                    trev4markIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent5"){
                    trevent5Index = column;
                }else if(check[row][column].toLowerCase() == "trev5mark"){
                    trev5markIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent6"){
                    trevent6Index = column;
                }else if(check[row][column].toLowerCase() == "trev6mark"){
                    trev6markIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent7"){
                    trevent7Index = column;
                }else if(check[row][column].toLowerCase() == "trev7mark"){
                    trev7markIndex = column;
                }else if(check[row][column].toLowerCase() == "trevent8"){
                    trevent8Index = column;
                }else if(check[row][column].toLowerCase() == "trev8mark"){
                    trev8markIndex = column;
                }else if(check[row][column].toLowerCase() == "fifieldclass"){
                    fifieldclassIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent1"){
                    fievent1Index = column;
                }else if(check[row][column].toLowerCase() == "fiev1mark"){
                    fiev1markIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent2"){
                    fievent2Index = column;
                }else if(check[row][column].toLowerCase() == "fiev2mark"){
                    fiev2markIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent3"){
                    fievent3Index = column;
                }else if(check[row][column].toLowerCase() == "fiev3mark"){
                    fiev3markIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent4"){
                    fievent4Index = column;
                }else if(check[row][column].toLowerCase() == "fiev4mark"){
                    fiev4markIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent5"){
                    fievent5Index = column;
                }else if(check[row][column].toLowerCase() == "fiev5mark"){
                    fiev5markIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent6"){
                    fievent6Index = column;
                }else if(check[row][column].toLowerCase() == "fiev6mark"){
                    fiev6markIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent7"){
                    fievent7Index = column;
                }else if(check[row][column].toLowerCase() == "fiev7mark"){
                    fiev7markIndex = column;
                }else if(check[row][column].toLowerCase() == "fievent8"){
                    fievent8Index = column;
                }else if(check[row][column].toLowerCase() == "fiev8mark"){
                    fiev8markIndex = column;
                }
            }
        }
        //Makes a list of classes of all the athletes with their attributes
        for(let i = 1; i < colNames.length; i++){
            athletes[i] = new athlete(colNames[i][regIndex],colNames[i][FnameIndex],colNames[i][LnameIndex],colNames[i][genderIndex],colNames[i][DOBIndex],colNames[i][address1Index],colNames[i][address2Index],
            colNames[i][cityIndex],colNames[i][stateIndex],colNames[i][zipcodeIndex],colNames[i][countryIndex],colNames[i][homephoneIndex],colNames[i][emailIndex],colNames[i][memberNumberIndex],colNames[i][teamNameIndex],colNames[i][agetrkfldIndex],
            colNames[i][trclassIndex],colNames[i][trevent1Index],colNames[i][trev1markIndex],colNames[i][trevent2Index],colNames[i][trev2markIndex],colNames[i][trevent3Index],colNames[i][trev3markIndex],colNames[i][trevent4Index],colNames[i][trev4markIndex],
            colNames[i][trevent5Index],colNames[i][trev5markIndex],colNames[i][trevent6Index],colNames[i][trev6markIndex],colNames[i][trevent7Index],colNames[i][trev7markIndex],colNames[i][trevent8Index],colNames[i][trev8markIndex],colNames[i][fifieldclassIndex],
            colNames[i][fievent1Index],colNames[i][fiev1markIndex],colNames[i][fievent2Index],colNames[i][fiev2markIndex],colNames[i][fievent3Index],colNames[i][fiev3markIndex],colNames[i][fievent4Index],colNames[i][fiev4markIndex],colNames[i][fievent5Index],
            colNames[i][fiev5markIndex],colNames[i][fievent6Index],colNames[i][fiev6markIndex],colNames[i][fievent7Index],colNames[i][fiev7markIndex],colNames[i][fievent8Index],colNames[i][fiev8markIndex]);
        }
        // console.log(athletes);

        document.getElementById("names").innerHTML = athletes[num].Fname + athletes[num].Lname;
        document.getElementById("gender").innerHTML = athletes[num].gender;
        document.getElementById("dob").innerHTML = athletes[num].DOB;
        document.getElementById("address").innerHTML = athletes[num].address1 + " " + athletes[num].city + ", " + athletes[num].state + " " + athletes[num].zipcode;
        document.getElementById("email").innerHTML = athletes[num].email;
        document.getElementById("call").innerHTML = athletes[num].homephone;
        document.getElementById("id").innerHTML = athletes[num].memberNumber;
        document.getElementById("teamName").innerHTML = athletes[num].teamName;
        document.getElementById("age").innerHTML = athletes[num].agetrkfld;
        console.log(athletes)

    }
    
    function updateForm(){
        document.getElementById("names").innerHTML = athletes[num].Fname + " " + athletes[num].Lname;
        document.getElementById("gender").innerHTML = athletes[num].gender;
        document.getElementById("dob").innerHTML = athletes[num].DOB;
        document.getElementById("address").innerHTML = athletes[num].address1 + " " + athletes[num].city + ", " + athletes[num].state + " " + athletes[num].zipcode;
        document.getElementById("email").innerHTML = athletes[num].email;
        document.getElementById("call").innerHTML = athletes[num].homephone;
        document.getElementById("id").innerHTML = athletes[num].memberNumber;
        document.getElementById("teamName").innerHTML = athletes[num].teamName;
        document.getElementById("age").innerHTML = athletes[num].agetrkfld;
    }
    function printDiv(){
        window.print();
    }
    //Removes quotes and spaces from a string   
    function trimStr(str) {
        str = str.replace(/^"(.*)"$/, '$1');
        return str.trim();
    }

    //returns if the string provided is empty or not
    function isEmpty(str) {
        return str === "";
    }

    //Puts a string into a number format: xxx-xxx-xxxx
    function phoneFormat(str) {
        var newStr = "";
        for (var i = 0; i < str.length; i++) {
            if (i == 3 || i == 6) {
                newStr += "-";
            }
            newStr += str.charAt(i);
        }
        return newStr;
    }
    function next(){
        num++;
        updateForm();
        console.log(num);
    }
    function back(){
        if (num > 1){
            num--;
        }
        updateForm();
        console.log(num);
    }
</script>

</html>