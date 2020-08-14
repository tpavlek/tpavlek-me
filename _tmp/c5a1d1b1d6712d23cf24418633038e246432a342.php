<div class="podcast-episode">
    <section class="episode-embed">
        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo e($track_no); ?>&amp;color=ff5500&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=false&amp;show_reposts=false"></iframe>
    </section>

    <?php if(isset($mp3url)): ?>
        <section class="download">
            <a class="episode-mp3" href="<?php echo e($mp3url); ?>"><i class="fa fa-download"></i> Download MP3</a>
        </section>
    <?php endif; ?>
</div>

