function obj_swipe() {
                //Enable swiping...
                var click = 2;
                var click_num = 0;
                var transitionEnd_num = 0;
                var event_style = 0;
                document.getElementById("load_div").style.visibility = 'visible';
                window.onload = function () {
                  //$("#load_div").style.visibility = 'visible';
                  document.getElementById("load_div").style.visibility = 'hidden';
                };

                $("#arrow").addClass("animate");
                $("#s_00").children("div.target").on( 'animationend webkitAnimationEnd oAnimationEnd',
                 function( event ) { 
                    transitionEnd_num++;
                    if ( transitionEnd_num == 16 && click_num == 1 ) {
                        transitionEnd_num = 0;
                        document.getElementById("s_00").style.visibility='hidden';
                        document.getElementById("s_01").style.visibility='visible';
                        document.getElementById("s_02").style.visibility='hidden';
                        $("#page_01").addClass("animate");
                        $("#page_01").on( 'animationend webkitAnimationEnd oAnimationEnd',obj_page_01_bng_animationend);
                        click_num = 2;
                        $("#test").html("s_" +click_num+ " show auto" );
                    }
                } );
                function obj_page_01_bng_animationend() {

                    $("#page_01_txt_00").addClass("animate");
                    $("#page_01_txt_01").addClass("animate");
                    $("#page_01_txt_02").addClass("animate");
                }
                function obj_page_03_txt_animationend() {

                    $("#page_03_butterfly_00").addClass("animate");
                    $("#page_03_butterfly_01").addClass("animate");
                    $("#page_03_butterfly_02").addClass("animate");
                    $("#page_03_butterfly_00").children("div.target").addClass("animate");
                    $("#page_03_butterfly_01").children("div.target").addClass("animate");
                    $("#page_03_butterfly_02").children("div.target").addClass("animate");
                }
                $("#test").swipe(
                {
                    swipeStatus: function (event, phase, direction, distance, duration, fingers) {
                        /*var str = "wipe Phase : " + phase + "<br/>";
                        str += "Direction from inital touch: " + direction + "<br/>";
                        str += "Distance from inital touch: " + distance + "<br/>";
                        str += "Duration of swipe: " + duration + "<br/>";
                        str += "Fingers used: " + fingers + "<br/></h4>";
                        if (phase != "cancel" && phase != "end") {
                            if (duration < 5000)
                                str += "Under maxTimeThreshold.<h3>Swipe handler will be triggered if you release at this point.</h3>"
                            else
                                str += "Over maxTimeThreshold. <h3>Swipe handler will be canceled if you release at this point.</h3>"

                            if (distance < 200)
                                str += "Not yet reached threshold.  <h3>Swipe will be canceled if you release at this point.</h3>"
                            else
                                str += "Threshold reached <h3>Swipe handler will be triggered if you release at this point.</h3>"
                        }

                        if (phase == "cancel")
                            str += "<br/>Handler not triggered. <br/> One or both of the thresholds was not met "
                        if (phase == "end")
                            str += "<br/>Handler was triggered."
                        $("#test").html(str);*/
                        if ( phase == "cancel" || phase == "end")
                            click = 2;
                        else
                            click = 1;

                        if (duration > 5000 || distance < 100 ){
                            return ;
                        }


                        if ( direction == "up" ) {
                            if ( click == 2 ) {
                                click = 1;

                                click_num=click_num>=4?4:click_num+1;
                                if ( click_num == 0 ) {
                                    document.getElementById("s_00").style.visibility='visible';
                                    document.getElementById("s_01").style.visibility='visible';
                                    document.getElementById("s_02").style.visibility='hidden';
                                    document.getElementById("s_03").style.visibility='hidden';

                                    $("#s_00").children("div.target").removeClass("animate");
                                    $("#s_00").children("div.target").children("div.target").removeClass("animate");

                                    $("#page_01").removeClass("animate");
                                    $("#page_01_txt_00").removeClass("animate");
                                    $("#page_01_txt_01").removeClass("animate");
                                    $("#page_01_txt_02").removeClass("animate");
                                    $("#arrow").addClass("animate");
                                } else if ( click_num == 1 ) {
                                    document.getElementById("s_00").style.visibility='visible';
                                    document.getElementById("s_01").style.visibility='visible';
                                    document.getElementById("s_02").style.visibility='hidden';
                                    document.getElementById("s_03").style.visibility='hidden';

                                    $("#s_00").children("div.target").addClass("animate");
                                    $("#s_00").children("div.target").children("div.target").addClass("animate");
                                    $("#page_01_txt_00").removeClass("animate");
                                    $("#page_01_txt_01").removeClass("animate");
                                    $("#page_01_txt_02").removeClass("animate");
                                    $("#page_01").removeClass("animate");
                                    $("#arrow").addClass("animate");
                                } else if ( click_num == 2 ) {
                                    document.getElementById("s_00").style.visibility='hidden';
                                    document.getElementById("s_01").style.visibility='visible';
                                    document.getElementById("s_02").style.visibility='hidden';
                                    document.getElementById("s_03").style.visibility='hidden';
                                    $("#page_01").addClass("animate");
                                    $("#page_01").on( 'animationend webkitAnimationEnd oAnimationEnd',obj_page_01_bng_animationend);
                                    $("#page_02_txt_00").removeClass("animate");
                                    $("#arrow").addClass("animate");
                                } else if ( click_num == 3 ) {
                                    document.getElementById("s_00").style.visibility='hidden';
                                    document.getElementById("s_01").style.visibility='hidden';
                                    document.getElementById("s_02").style.visibility='visible';
                                    document.getElementById("s_03").style.visibility='hidden';

                                    $("#page_02_txt_00").addClass("animate");
                                    $("#page_03_txt_00").removeClass("animate");
                                    $("#page_03_butterfly_00").removeClass("animate");
                                    $("#page_03_butterfly_01").removeClass("animate");
                                    $("#page_03_butterfly_02").removeClass("animate");
                                    $("#page_03_butterfly_00").children("div.target").removeClass("animate");
                                    $("#page_03_butterfly_01").children("div.target").removeClass("animate");
                                    $("#page_03_butterfly_02").children("div.target").removeClass("animate");
                                    $("#arrow").addClass("animate");
                                } else if ( click_num == 4 ) {
                                    document.getElementById("s_00").style.visibility='hidden';
                                    document.getElementById("s_01").style.visibility='hidden';
                                    document.getElementById("s_02").style.visibility='hidden';
                                    document.getElementById("s_03").style.visibility='visible';
                                    $("#page_02_txt_00").removeClass("animate");
                                    $("#page_03_txt_00").addClass("animate");
                                    $("#page_03_txt_00").on( 'animationend webkitAnimationEnd oAnimationEnd',obj_page_03_txt_animationend);

                                    $("#arrow").removeClass("animate");

                                }

                            }
                        } else if (  direction == "down"  ) {
                           if ( click == 2 ) {
                            click = 1;

                            click_num=click_num<=0?0:click_num-1;
                            if ( click_num == 0 ) {
                                document.getElementById("s_00").style.visibility='visible';
                                document.getElementById("s_01").style.visibility='visible';
                                document.getElementById("s_02").style.visibility='hidden';
                                document.getElementById("s_03").style.visibility='hidden';

                                $("#s_00").children("div.target").removeClass("animate");
                                $("#s_00").children("div.target").children("div.target").removeClass("animate");

                                transitionEnd_num = 0;

                                $("#page_01_txt_00").removeClass("animate");
                                $("#page_01_txt_01").removeClass("animate");
                                $("#page_01_txt_02").removeClass("animate");
                                $("#page_01").removeClass("animate");
                                $("#arrow").addClass("animate");
                            } else if ( click_num == 1 ) {
                                document.getElementById("s_00").style.visibility='visible';
                                document.getElementById("s_01").style.visibility='visible';
                                document.getElementById("s_02").style.visibility='hidden';
                                document.getElementById("s_03").style.visibility='hidden';

                                $("#s_00").children("div.target").removeClass("animate");
                                $("#s_00").children("div.target").children("div.target").removeClass("animate");
                                $("#page_01_txt_00").removeClass("animate");
                                $("#page_01_txt_01").removeClass("animate");
                                $("#page_01_txt_02").removeClass("animate");
                                $("#page_01").removeClass("animate");
                                $("#arrow").addClass("animate");
                                click_num = 0;
                                transitionEnd_num = 0;
                            } else if ( click_num == 2 ) {
                                document.getElementById("s_00").style.visibility='hidden';
                                document.getElementById("s_01").style.visibility='visible';
                                document.getElementById("s_02").style.visibility='hidden';
                                document.getElementById("s_03").style.visibility='hidden';
                                $("#page_01").addClass("animate");
                                $("#page_01").on( 'animationend webkitAnimationEnd oAnimationEnd',obj_page_01_bng_animationend);
                                $("#page_02_txt_00").removeClass("animate");
                                $("#arrow").addClass("animate");
                            } else if ( click_num == 3 ) {
                                document.getElementById("s_00").style.visibility='hidden';
                                document.getElementById("s_01").style.visibility='hidden';
                                document.getElementById("s_02").style.visibility='visible';
                                document.getElementById("s_03").style.visibility='hidden';
                                $("#page_02_txt_00").addClass("animate");
                                $("#page_03_txt_00").removeClass("animate");
                                $("#page_03_butterfly_00").removeClass("animate");
                                $("#page_03_butterfly_01").removeClass("animate");
                                $("#page_03_butterfly_02").removeClass("animate");
                                $("#page_03_butterfly_00").children("div.target").removeClass("animate");
                                $("#page_03_butterfly_01").children("div.target").removeClass("animate");
                                $("#page_03_butterfly_02").children("div.target").removeClass("animate");
                                $("#arrow").addClass("animate");
                            } else if ( click_num == 4 ) {
                                document.getElementById("s_00").style.visibility='hidden';
                                document.getElementById("s_01").style.visibility='hidden';
                                document.getElementById("s_02").style.visibility='hidden';
                                document.getElementById("s_03").style.visibility='visible';
                                $("#page_02_txt_00").removeClass("animate");
                                $("#page_03_txt_00").addClass("animate");
                                $("#page_03_txt_00").on( 'animationend webkitAnimationEnd oAnimationEnd',obj_page_03_txt_animationend);

                                $("#arrow").removeClass("animate");

                            }

                        }


                    }
                    $("#test").html("s_" +click_num+ " show " + direction);
                },
                threshold: 200,
                maxTimeThreshold: 5000,
                fingers: 'all'
            });
}

document.addEventListener('DOMContentLoaded', obj_swipe, false);

