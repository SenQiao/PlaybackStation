<?php wp_head(); ?>

  <header><i>Media and the Movement</i><span style="float: right">UNC Digital Innovation Lab >> Playback Station</span></header>
  <div class="HolyGrail-body">
    <main class="HolyGrail-content">
        <div id="main-top-view">
        </div>
        <div id="main-tabbed" class="ui-layout-center">
            <ul>
                <li><a href="#tab-playlist">Programs</a></li>
                <li><a href="#tab-details">Details</a></li>
              <!--   <li><a href="#tab-transcript">Transcript</a></li> -->
            </ul>
            <div id="tab-playlist" class="tab-content">
                <div id="track-table">
                </div>
            </div>
            <div id="tab-details" class="tab-content">
            </div>
          <!--   <div id="tab-transcript" class="tab-content">
                <p id="track-transcript-title"></p>
                <p><input type="checkbox" id="transcSyncOn" name="transcSyncOn" checked> Scroll transcript to follow playback</p>
                <div id="transcr-table">
                </div>
            </div> -->
        </div>
    </main>
    <nav class="HolyGrail-nav">
        <p id ="play-collection"><b>PLAY</b></p>
        <!--how is this populated?-->
        <div class="play-option data-index=" 3"="" data-coll-type="essay"><i class="play-icon fa fa-newspaper-o"></i> Program</div>
        <!--04/04/2017-->
        <div id="no-search-boxes"></div>
       
        <div id ="search-boxes"></div>
        <!--
              <div id ="search-boxes"><input type="checkbox" name="search-titles" id="search-titles" checked="checked"/> Titles
            <input type="checkbox" name="search-abstracts" id="search-abstracts" checked="checked"/> Abstracts
        </div>
        <input type="text" name="search-text" id="search-text" size="22" />  -->

        <!--04/04/2017-->
        <hr/>
        <div id="play-results-container"><div id="play-results">
        </div></div>
    </nav>

    <aside class="HolyGrail-activity">
        <div id="pbs-activity">
            <p><b>Recent Blogposts</b></p>
            <p>Blog 1…</p>
            <p>Blog 2…</p>
            <p><b>Most popular tracks</b></p>
            <p>Track blah blah</p>
        </div>
        <hr/>
        <p><b>User Collection</b></p>
        <div id="pbs-user-container"><div id="pbs-user-collection">
        </div></div>
    </aside>
  </div>
  <footer>
  </footer>

<?php wp_footer(); ?>
