<style type="text/css">

        .play-bar.rounded-box,
        .play.rounded-box{
          display: none;
        }

        .nav-side-menu {
            overflow: auto;
            font-family: verdana;
            font-size: 12px;
            font-weight: 200;
            background-color: #2e353d;
            color: #e1ffff;
            height: 100%;
            width: 100%;
        }
        .nav-side-menu .brand {
          background-color: #23282e;
          line-height: 50px;
          display: block;
          text-align: center;
          font-size: 14px;
        }
        .nav-side-menu .toggle-btn {
          display: none;
        }
        .nav-side-menu ul,
        .nav-side-menu li {
          list-style: none;
          padding: 0px;
          margin: 0px;
          line-height: 35px;
          cursor: pointer;
        
        }
        .nav-side-menu ul :not(collapsed) .arrow:before,
        .nav-side-menu li :not(collapsed) .arrow:before {
          font-family: FontAwesome;
          content: "\f078";
          display: inline-block;
          padding-left: 10px;
          padding-right: 10px;
          vertical-align: middle;
          float: right;
        }
        .nav-side-menu ul .active,
        .nav-side-menu li .active {
          border-left: 3px solid #d19b3d;
          background-color: #4f5b69;
        }
        .nav-side-menu ul .sub-menu li.active,
        .nav-side-menu li .sub-menu li.active {
          color: #d19b3d;
        }
        .nav-side-menu ul .sub-menu li.active a,
        .nav-side-menu li .sub-menu li.active a {
          color: #d19b3d;
        }
        .nav-side-menu ul .sub-menu li,
        .nav-side-menu li .sub-menu li {
          background-color: #181c20;
          border: none;
          line-height: 28px;
          border-bottom: 1px solid #23282e;
          margin-left: 0px;
        }
        .nav-side-menu ul .sub-menu li:hover,
        .nav-side-menu li .sub-menu li:hover {
          background-color: #020203;
        }
        .nav-side-menu ul .sub-menu li:before,
        .nav-side-menu li .sub-menu li:before {
          font-family: FontAwesome;
          content: "\f105";
          display: inline-block;
          padding-left: 10px;
          padding-right: 10px;
          vertical-align: middle;
        }
        .nav-side-menu li {
          padding-left: 0px;
          border-left: 3px solid #2e353d;
          border-bottom: 1px solid #23282e;
        }
        .nav-side-menu li a {
          text-decoration: none;
          color: #e1ffff;
        }
        .nav-side-menu li a i {
          padding-left: 10px;
          width: 20px;
          padding-right: 20px;
        }
        .nav-side-menu li:hover {
          border-left: 3px solid #d19b3d;
          background-color: #4f5b69;
          -webkit-transition: all 1s ease;
          -moz-transition: all 1s ease;
          -o-transition: all 1s ease;
          -ms-transition: all 1s ease;
          transition: all 1s ease;
        }
        @media (max-width: 767px) {
          .nav-side-menu {
            width: 100%;
            margin-bottom: 10px;
          }
          .nav-side-menu .toggle-btn {
            display: block;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 10 !important;
            padding: 3px;
            background-color: #ffffff;
            color: #000;
            width: 40px;
            text-align: center;
          }
          .brand {
            text-align: left !important;
            font-size: 22px;
            padding-left: 20px;
            line-height: 50px !important;
          }
          
          .video-player{
              max-width: 100%;
              min-width: 70%;
              margin: 0 auto;
              position: relative;
              min-height: 200px;
          }
        }
        @media (min-width: 767px) {
          .nav-side-menu .menu-list .menu-content {
            display: block;
          }
          
          .video-player{
              max-width: 100%;
              min-width: 70%;
              margin: 0 auto;
              position: relative;
              min-height: 400px;
          }
        }
        
        .text-content{
            background: #fff;
            height: 100%;
            min-height: 550px;
            padding: 40px;
        }
        .text-content p {
            font-size: 14px;
            text-shadow: none;
            text-align: left;
        }
        .video-course-intro {
            background-color: #000;
            padding: 0px;
            border-radius: 0px;
            position: relative;
        }
        .course-concern {
            background-color: #fff;
            padding-top: 5px;
            padding-bottom: 95px;
        }
        
        @media screen and (min-width: 769px){
            .video-player {
                width: calc(100vh + 400px);
            }
        }
        
        .jumbotron p {
            margin-bottom: 0px;
            color: #464646;
        }
        
        .panel-footer {
            background-color: #e6e6e6;
        }
    </style>