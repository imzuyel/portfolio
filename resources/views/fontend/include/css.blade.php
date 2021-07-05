<style type="text/css">

    .aleft {

        line-height: 1em;
        letter-spacing: 0;
        text-align: left;

    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
        margin: 0px 20px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }

    .centered {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transform: -webkit-translate(-50%, -50%);
        transform: -moz-translate(-50%, -50%);
        transform: -ms-translate(-50%, -50%);
        color: darkred;
        z-index: 100;
        visibility: hidden;
    }

    /* Project data */
    .infocardContainer {
        display: flex;
        height: 250px;
        width: 250px;
        border-radius: 150px;
        background: #FC354C;
        background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
        background: linear-gradient(to right, #0ABFBC, #FC354C);
        transition: all 500ms ease-in;
        transition-delay: 0.4s;
        margin: auto;
        margin-top: 100px;
    }

    .infocardContainer:hover {
        width: 480px;
        height: 250px;
        border-radius: 150px 10px 100px 10px;
        transition: all 0.4s ease-out;

    }

    .infocardContainer div {
        text-color: white;
        flex-shrink: 1;
        width: 100%;
    }

    .infocardContainer div * {
        display: flex;
        overflow: hidden;
        text-overflow: hidden;
        color: white;
        white-space: nowrap;
        width: 0;
        height: auto;
        transition: all 450ms ease-in;
        transition-delay: 0.4s;
    }

    #id {
        visibility: hidden;
    }

    .infocardContainer:hover #id {
        visibility: visible;
    }

    .infocardContainer:hover div * {
        display: flex;
        visibility: visible;
        transition: all 0.4s ease-out;
        transition-delay: 500ms;
        width: 100%;
        height: auto;
    }

    .infocardContainer #main,
    .infocardContainer #main img {
        height: 230px;
        width: 230px;
        padding-right: 10px;
        border-radius: 100%;
        flex-shrink: 0;
        object-fit: cover;
    }

    .infocardContainer #main img {
     height: 230px;
        width: 230px;
        transition: none;
        display: float;
        position: relative;
        border: 5px solid rgb(1, 255, 98);
        margin: 0 0 0 0;
        padding: 0 0 0 0;
    }

    .infocardContainer #textbois {
        position: relative;
    }

    #hotlinks {
        max-width: 60%;
        max-height: 35px;
        position: absolute;
        bottom: 5px;
        border-radius: 35px;
    }



    .infocardContainer #textbois #hotlinks * {
        background-color: black;
        max-width: 33px;
        border-radius: 25px;
        margin:.5px;
    }

    .infocardContainer #textbois #hotlinks *:hover {}

    .projectbg {
        background: #70e1f5;
        background: -webkit-linear-gradient(to right, #ffd194, #70e1f5);
        background: linear-gradient(to right, #ffd194, #70e1f5);

    }


    .aboutbg {
        background: #70e1f5;
        background: -webkit-linear-gradient(to right, #ffd194, #70e1f5);
        background: linear-gradient(to right, #ffd194, #70e1f5);

    }

    /* Testimonial */
    .testimonial {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #212529;
        color: #ffffff;
    }

    .testimonial-slide {
        padding: 40px 20px;
    }

    .testimonial_box-top {
        background: #FC354C;
        background: -webkit-linear-gradient(to right, #0ABFBC, #FC354C);
        background: linear-gradient(to right, #0ABFBC, #FC354C);

        padding: 30px;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        box-shadow: 2px 2px 10px rgba(206, 212, 218, 0.534);
    }

    .testimonial_box-icon {
        padding: 10px 0;
    }

    .testimonial_box-icon i {
        font-size: 25px;
        color: #ffff;
    }

    .testimonial_box-text {
        padding: 10px 0;
    }

    .testimonial_box-text p {
        color: #ffffff;
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 0;
    }

    .testimonial_box-name {
        padding-top: 10px;
    }

    .testimonial_box-name h4 {
        font-size: 20px;
        line-height: 25px;
        color: #ffff;
        margin-bottom: 0;
    }

    .testimonial_box-job p {
        color: #ffff;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 3px;
        line-height: 20px;
        font-weight: 300;
        margin-bottom: 0;
    }

    .slick-dots li {
        padding: 20px 30px;
        opacity: 0.5;
    }

    .slick-dots li button {

        background-position: center !important;
        background-size: cover !important;
        text-indent: -9999px;
        overflow: hidden;
        width: 60px;
        height: 60px;
        border-radius: 50px;
        border: 4px solid #fa04d1;
    }

    .slick-dots .slick-active {
        opacity: 1;
    }

    .slick-dots {
        bottom: 0;
    }
</style>
