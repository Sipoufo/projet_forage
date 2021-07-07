@extends('Client.layout.default')
@section('title', 'Message')
@section ('nav')

    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i class='bx bx-layer nav_logo-icon'></i>
                <span class="nav_logo-name">
                    Christian Kepya
                </span>
            </a>

            <div class="nav_list">
                <a href="/home" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Home</span>
                </a>

                <a href="/user" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">User</span>
                </a>
                
                <a href="/invoice" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Bills">
                    <i class='fas fa-file-invoice-dollar nav_icon'></i>
                    <span class="nav_name">Invoice</span>
                </a>
                
                <a href="/receipt" class="nav_link" data-bs-toggle="tooltip" data-bs-placement="right" title="Receipt">
                    <i class='fas fa-receipt nav_icon'></i>
                    <span class="nav_name">Receipt</span>
                </a>

                <a href="/message" class="nav_link active" data-bs-toggle="tooltip" data-bs-placement="right" title="Message">
                    <i class='bx bx-message-square-detail nav_icon'></i>
                    <span class="nav_name">Messages</span>
                </a>
            </div>
        </div>

        <section class="nav_notify_button" id="notify">
            <i class='bx bx-bell nav_icon not'>
                <i class='bx bx-radio-circle bx-burst nav_notify_radio_position' style='color:#ffe200' id="bx1"></i>
                <i class='bx bxs-circle nav_notify_circle_position' style='color:#ffe200' id="bx"></i>
            </i>
            <span class="nav_name not" id="not">Notification</span>
        </section>

        <section class="hide_menu_account card" id="sms">
            <section class="card-header espace">
                <span class="font-12 col-xs-6 font-semi-bold mr-4">Nouvelles notifications</span>
                <a class="mark-notification-read col-xs-6 text-right font-12 font-semi-bold" href="javascript:;"> Marquer comme lu</a>
            </section>
            <a href="google.com" class="noti pl-4 pr-4 pt-3 pb-3">
                <div class="user_i"><i class='bx bx-user bxUser'></i></div>
                <div class="forage">
                    <div>Bienvenue sur ForageManager</div>
                    <div style="font-size: 12px;">il y'a deux minute</div>
                </div>
            </a>
            <hr>
        </section>

        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Log out</span>
        </a>
    </nav>

@stop
@section('main')

<style>


.chat-box {
    height: 100%;
    width: 100%;
    background-color: #fff;
    overflow: hidden
}

.chats {
    padding: 30px 15px;
    overflow: scroll;
    height: 321px;
}

.chat-avatar {
    float: right
}

.chat-avatar .avatar {
    width: 30px;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}

.chat-body {
    display: block;
    margin: 10px 30px 0 0;
    overflow: hidden
}

.chat-body:first-child {
    margin-top: 0
}

.chat-content {
    position: relative;
    display: block;
    float: right;
    padding: 8px 15px;
    margin: 0 20px 10px 0;
    clear: both;
    color: #fff;
    background-color: #62a8ea;
    border-radius: 4px;
        -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
    box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
}

.chat-content:before {
    position: absolute;
    top: 10px;
    right: -10px;
    width: 0;
    height: 0;
    content: '';
    border: 5px solid transparent;
    border-left-color: #62a8ea
}

.chat-content>p:last-child {
    margin-bottom: 0
}

.chat-content+.chat-content:before {
    border-color: transparent
}

.chat-time {
    display: block;
    margin-top: 8px;
    color: rgba(255, 255, 255, .6)
}

.chat-left .chat-avatar {
    float: left
}

.chat-left .chat-body {
    margin-right: 0;
    margin-left: 30px
}

.chat-left .chat-content {
    float: left;
    margin: 0 0 10px 20px;
    color: #76838f;
    background-color: #dfe9ef
}

.chat-left .chat-content:before {
    right: auto;
    left: -10px;
    border-right-color: #dfe9ef;
    border-left-color: transparent
}

.chat-left .chat-content+.chat-content:before {
    border-color: transparent
}

.chat-left .chat-time {
    color: #a3afb7
}

.panel-footer {
    padding: 0 30px 15px;
    background-color: transparent;
    border-top: 1px solid transparent;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
.avatar img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0 none;
    border-radius: 1000px;
}
.chat-avatar .avatar {
    width: 30px;
}
.avatar {
    position: relative;
    display: inline-block;
    width: 40px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom;
}
</style>

<h1>                            
    <i class='bx bx-grid-alt'></i>
    <span class="nav_name">Chat</span>
</h1>

<!-- Default Card Example -->
<div class="card mb-4">
    <div class="card-header text-center">
        chat with the owner
    </div>
    <div class="card-body">
        <div class="container">
            <div class="">
              <!-- Panel Chat -->
              <div class="panel" id="chat">
                <div class="panel-body">
                    <div class="chats">
                        <div class="chat">
                            <div class="chat-avatar">
                                <a class="avatar avatar-online" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="June Lane">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
                                <i></i>
                                </a>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                <p>
                                    Good morning, sir.
                                    <br>What can I do for you?
                                </p>
                                <time class="chat-time" datetime="2015-07-01T11:37">11:37:08 am</time>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                        <div class="chat-avatar">
                            <a class="avatar avatar-online" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="Edward Fletcher">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="...">
                            <i></i>
                            </a>
                        </div>
                        <div class="chat-body">
                            <div class="chat-content">
                            <p>Well, I am just looking around.</p>
                            <time class="chat-time" datetime="2015-07-01T11:39">11:39:57 am</time>
                            </div>
                        </div>
                        </div>
                        <div class="chat">
                        <div class="chat-avatar">
                            <a class="avatar avatar-online" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="June Lane">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
                            <i></i>
                            </a>
                        </div>
                        <div class="chat-body">
                            <div class="chat-content">
                            <p>
                                If necessary, please ask me.
                            </p>
                            <time class="chat-time" datetime="2015-07-01T11:40">11:40:10 am</time>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer mt-3">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Say something">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Send</button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Panel Chat -->
            </div>
        </div>
    </div>
</div>


             
@stop
        