var songs = {
    maiden:
        ['audio/iron_maiden/phantom_of_the_opera.mp3', 'audio/iron_maiden/wrathchild.mp3', 'audio/iron_maiden/the_number_of_the_beast.mp3',
            'audio/iron_maiden/the_trooper.mp3', 'audio/iron_maiden/powerslave.mp3', 'audio/iron_maiden/alexander_the_great.mp3', 'audio/iron_maiden/the_evil_that_men_do.mp3',
            'audio/iron_maiden/no_prayer_for_the_dying.mp3', 'audio/iron_maiden/afraid_to_shoot_strangers.mp3', 'audio/iron_maiden/sign_of_the_cross.mp3',
            'audio/iron_maiden/the_clansman.mp3', 'audio/iron_maiden/the_wicker_man.mp3', 'audio/iron_maiden/dance_of_death.mp3',
            'audio/iron_maiden/brighter_than_a_thousand_suns.mp3', 'audio/iron_maiden/el_dorado.mp3', 'audio/iron_maiden/the_book_of_souls.mp3'],
    metallica:
        ['audio/metallica/phantom_lord.mp3', 'audio/metallica/fight_fire_with_fire.mp3', 'audio/metallica/master_of_puppets.mp3',
            'audio/metallica/one.mp3', 'audio/metallica/sad_but_true.mp3', 'audio/metallica/king_nothing.mp3', 'audio/metallica/fuel.mp3', 'audio/metallica/st_anger.mp3',
            'audio/metallica/the_judas_kiss.mp3', 'audio/metallica/atlas_rise.mp3'],
    megadeth:
        ['audio/megadeth/skull_beneath_the_skin.mp3', 'audio/megadeth/peace_sells.mp3', 'audio/megadeth/in_my_darkest_hour.mp3',
            'audio/megadeth/holy_wars.mp3', 'audio/megadeth/symphony_of_destruction.mp3', 'audio/megadeth/youthanasia.mp3', 'audio/megadeth/she-wolf.mp3',
            'audio/megadeth/prince_of_darkness.mp3', 'audio/megadeth/dread_and_the_fugitive_mind.mp3', 'audio/megadeth/something_that_im_not.mp3',
            'audio/megadeth/never_walk_alone.mp3', 'audio/megadeth/head_crusher.mp3', 'audio/megadeth/deadly_nightshade.mp3', 'audio/megadeth/super_collider.mp3',
            'audio/megadeth/the_threat_is_real.mp3'],
    rammstein:
        ['audio/rammstein/du_riechst_so_gut.mp3', 'audio/rammstein/engel.mp3', 'audio/rammstein/links_2_3_4.mp3', 'audio/rammstein/reise_reise.mp3',
            'audio/rammstein/benzin.mp3', 'audio/rammstein/ich_tu_dir_weh.mp3', 'audio/rammstein/was_ich_liebe.mp3']
};

var path = location.href.split("/").slice(-1).join('').split('.').slice(0, 1).join('');

var song = new Audio();

var old_vol = 1;
play = $('#play');
mute = $('#mute');
close = $('#close');

$('.fragment').on('click', function (e) {
    song.pause();
    i = e.target.getAttribute("data-album");
    song = new Audio(songs[path][i]);
    song.volume = $('#volume').val() / 100;
    song.play();
    $('#play').html('<i class="fas fa-pause"></i>');

    song.addEventListener('timeupdate', function (e) {
        curtime = parseInt(song.currentTime, 10);
        $('#slider').attr("value", curtime);
        $('#slider').attr("max", Math.floor(song.duration));
    });
});

play.on('click', function (e) {
    if (song.paused === false) {
        song.pause();
        $(this).html('<i class="fas fa-play"></i>');
    }
    else {
        song.play();
        $(this).html('<i class="fas fa-pause"></i>');
    }
});

mute.on('click', function (e) {
    if (song.volume === 0) {
        song.volume = old_vol;
        $('#volume').attr("value", song.volume * 100);
        $(this).html('<i class="fas fa-volume-up"></i>');
    }
    else {
        old_vol = $('#volume').val() / 100;
        song.volume = 0;
        $('#volume').attr("value", 0);
        $(this).html('<i class="fas fa-volume-mute"></i>');
    }
});

$('#volume').on("input", function (e) {
    song.volume = $('#volume').val() / 100;
    $('#volume').attr("value", song.volume * 100);
    if (song.volume <= 0.3) {
        $('#mute').html('<i class="fas fa-volume-down"></i>');
    }
    else {
        $('#mute').html('<i class="fas fa-volume-up">');
    }
});

$('#close').click(function (e) {
    song.pause();
    song.currentTime = 0;
    $('#play').html('<i class="fas fa-play"></i>');
});