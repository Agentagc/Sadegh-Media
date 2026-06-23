(function($) {
    "use strict";

    $(".tmp-intro-video-card-wrapper").each(function() {

        var $video_container = $(this);
        var $video = $(this).find("#tmp-video-element");

        // Video Controls
        var $video_controls = $video_container.find(".tmp-video-progress-container");
        var $play_button = $(this).find(".play-button");
        var $mute_button = $video_container.find(".sound-button");
        var $expanded = $(this).find(".expand-icon");
        var $closeBtn = $(this).find(".tmp-iv-close-button");
        var $progress_bar = $(this).find(".progress-bar");
        var $progress = $(this).find(".time-bar");
        var $buffer_bar = $(this).find(".buffer-bar");

        var $current = $(this).find(".current");
        var $duration = $(this).find(".duration");

        var $current_buffer = '';
        var $max_duration = '';
        var $perc = '';
        var $position = '';
        var $percentage = '';


        $video[0].oncanplaythrough = function() {
            $video[0].muted = true;
            $video[0].play();
            $video_controls.addClass("playing");
            if ($video[0].muted) {
                $mute_button.addClass("sound-muted");
            }

        }

        // Toggles play/pause for the video
        function playVideo() {
            if ($video[0].paused) {
                $video[0].play();
                $video_controls.addClass("playing");
            } else {
                $video[0].pause();
                $video_controls.removeClass("playing");
            }
        }

        // Expanded Video Wrapper
        function expanded() {
            $video_container.toggleClass("is-expanded");
        }

        // Play/pause on video click
        $video.click(function() {
            // $video_container.addClass("is-expanded");
            playVideo();
        });

        // Play/pause on button click
        $play_button.click(function() {
            playVideo();
        });

        // Mute video on button click
        $mute_button.click(function() {
            setTimeout(() => {
                $video[0].muted = !$video[0].muted;
                $(this).toggleClass("sound-muted");
            }, 200);

        });

        // Toggles play/pause for the video
        function playVideoFormStart() {
            // $video[0].play();
            // $video[0].currentTime = 0;
            $video[0].load();
        }

        // Expanded Button Click
        $expanded.click(function() {
            expanded();
            playVideoFormStart();
            setTimeout(() => {
                $video[0].muted = false;
                $mute_button.removeClass("sound-muted");
            }, 100);

        });


        function changeSpeed() {
            if ($video[0].playbackRate === 1) {
                $video[0].playbackRate = 2;
            } else if ($video[0].playbackRate === 2) {
                $video[0].playbackRate = 1;
            }
        }

        // VIDEO PROGRESS BAR All
        // time_format
        function time_format(seconds) {
            var m = Math.floor(seconds / 60) < 10 ?
                "0" + Math.floor(seconds / 60) :
                Math.floor(seconds / 60);
            var s = Math.floor(seconds - m * 60) < 10 ?
                "0" + Math.floor(seconds - m * 60) :
                Math.floor(seconds - m * 60);
            return m + ":" + s;
        }

        // startBuffer
        function startBuffer() {
            $current_buffer = $video[0].buffered.end(0);
            $max_duration = $video[0].duration;
            $perc = 100 * $current_buffer / $max_duration;
            $buffer_bar.css("width", $perc + "%");

            if ($current_buffer < $max_duration) {
                setTimeout(startBuffer, 500);
            }
        }

        // updatebar
        function updatebar(x) {
            $position = x - $progress.offset().left;
            $percentage = 100 * $position / $progress_bar.width();
            if ($percentage > 100) {
                $percentage = 100;
            }
            if ($percentage < 0) {
                $percentage = 0;
            }
            $progress.css("width", $percentage + "%");
            $video[0].currentTime = $video[0].duration * $percentage / 100;
        }

        $video.on("loadedmetadata", function() {
            $current.text(time_format(0));
            $duration.text(time_format($video[0].duration));
            // updateVolume(0, 0.7);
            setTimeout(startBuffer, 150);
        });

        // Video duration timer
        $video.on("timeupdate", function() {
            $current.text(time_format($video[0].currentTime));
            $duration.text(time_format($video[0].duration));
            var currentPos = $video[0].currentTime;
            var maxduration = $video[0].duration;
            var perc = 100 * $video[0].currentTime / $video[0].duration;
            $progress.css("width", perc + "%");
        });

        // VIDEO PROGRESS BAR
        // when video timebar clicked
        var timeDrag = false; /* check for drag event */
        $progress_bar.on("mousedown", function(e) {
            timeDrag = true;
            updatebar(e.pageX);

            setTimeout(() => {
                if ($("video").prop('muted')) {
                    $("video").prop('muted', true);
                } else {
                    $("video").prop('muted', false);
                }
            }, 500);

        });

    });

    $(document).ready(function() {
        // Function to play audio and handle playback issues
        function closePlayAudio(audioElement, callback) {
            if (audioElement) {
                audioElement.pause();
                audioElement.currentTime = 0;
                let playPromise = audioElement.play();
                if (playPromise !== undefined) {
                    playPromise.then(function() {
                        if (callback) {
                            callback();
                        }
                    }).catch(function(error) {
                        if (callback) {
                            callback();
                        }
                    });
                } else if (callback) {
                    callback();
                }
            } else if (callback) {
                callback();
            }
        }

        // Close button click event with audio playback
        $(".tmp-iv-close-button").click(function(e) {
            e.preventDefault();

            let closeButtonAudio = $("#tmp-close-button-audio")[0];

            closePlayAudio(closeButtonAudio, function() {
                setTimeout(function() {
                    $(".tmp-intro-video-card-wrapper").remove();
                    $(".background-overlay").remove();
                }, 500);
            });
        });

        // Notification bar close button click event
        $(document).on('click', '.inbio-close-button', function(e) {
            $('.inbio-notification-bar').fadeOut();
        });
    });

    if (typeof ThemesparkObj !== 'undefined' && ThemesparkObj.intro_video_close_sound) {

        let closeSound = `<audio class="tmp-close-button-audio-modal"  preload="auto"><source src=${ThemesparkObj.intro_video_close_sound}" type="audio/mpeg"><source src="${ThemesparkObj.intro_video_close_sound}" type="audio/ogg"></audio>`;


        if ($(".modal-header .close,.inbio-close-button,.close-menu-activation").length > 0) {
            $(".modal-header .close,.inbio-close-button").each(function(index) {
                if (index === 0) {
                    $(this).after(closeSound);
                }
            });


            $(".modal-header .close,.inbio-close-button,.close-menu-activation").click(function(e) {
                let modalButtonAudio = $(".tmp-close-button-audio-modal")[0];
                modalButtonAudio.pause();
                modalButtonAudio.currentTime = 0;
                modalButtonAudio.play();

            });
        }
    }

    // mneu audio js
    Audio.prototype.play = (function(play) {
        return function() {
            var audio = this,
                args = arguments,
                promise = play.apply(audio, args);
            if (promise !== undefined) {
                promise.catch(_ => {});
            }
        };
    })(Audio.prototype.play);


})(jQuery, window);