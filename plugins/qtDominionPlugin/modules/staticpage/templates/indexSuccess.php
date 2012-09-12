<?php if ('home' == $resource->slug): ?>

  <div id="homepagehero" class="row">

    <div class="span8" id="mainnav">

      <p><?php echo __('Browse by') ?></p>
      <ul>
        <li><?php echo link_to(image_tag('/plugins/qtDominionPlugin/images/icons-large/icon-institutions.png', array('width' => '42', 'height' => '42')).' '.__('Institutions'), array('module' => 'repository', 'action' => 'browse')) ?></li>
        <li><?php echo link_to(image_tag('/plugins/qtDominionPlugin/images/icons-large/icon-subjects.png', array('width' => '42', 'height' => '42')).' '.__('Subjects'), array('module' => 'taxonomy', 'action' => 'browse', 'id' => 35)) ?></li>
        <li><?php echo link_to(image_tag('/plugins/qtDominionPlugin/images/icons-large/icon-people.png', array('width' => '42', 'height' => '42')).' '.__('People &amp; Organizations'), array('module' => 'actor', 'action' => 'browse')) ?></li>
        <li><?php echo link_to(image_tag('/plugins/qtDominionPlugin/images/icons-large/icon-places.png', array('width' => '42', 'height' => '42')).' '.__('Places'), array('module' => 'taxonomy', 'action' => 'browse', 'id' => 42)) ?></li>
        <li><?php echo link_to(image_tag('/plugins/qtDominionPlugin/images/icons-large/icon-media.png', array('width' => '42', 'height' => '42')).' '.__('Media'), array('module' => 'digitalobject', 'action' => 'list')) ?></li>
        <li><?php echo link_to(image_tag('/plugins/qtDominionPlugin/images/icons-large/icon-new.png', array('width' => '42', 'height' => '42')).' '.__('Newest additions'), array('module' => 'search', 'action' => 'descriptionUpdates')) ?></li>
      </ul>

    </div>

    <div class="span3" id="intro">
      <h1>Archives Canada</h1>
      <h2>The Gateway to Canada's Past</h2>
      <p>This is the national database with <?php echo QubitSearch::getInstance()->index->getType('QubitRepository')->search(new Elastica_Query(new Elastica_Query_MatchAll()))->getTotalHits(); ?> archival repositories across the country and <?php echo QubitSearch::getInstance()->index->getType('QubitInformationObject')->search(new Elastica_Query(new Elastica_Query_MatchAll()))->getTotalHits(); ?> records. You can access these holdings and so much more. </p>
    </div>

  </div>

  <div id="homepage" class="row">

    <div class="span4" id="charts">

      <h3>Popular <br/><span>this week</span></h3>
      <ol>
        <li><a href="#">Popular description</a></li>
        <li><a href="#">Popular description with a long title</a></li>
        <li><a href="#">Popular description</a></li>
        <li><a href="#">Popular description</a></li>
        <li><a href="#">Popular description</a></li>
        <li><a href="#">Very Popular description</a></li>
        <li><a href="#">Popular description</a></li>
      </ol>

    </div>

    <div class="span4" id="virtualexhibit">

      <h3>Virtual Exhibits <br/><span>Exploring the Frasier Canyon</span></h3>

      <div class="row">
        <div class="span4">
          <?php echo link_to(image_tag('/plugins/qtDominionPlugin/images/icons-large/icon-archive.png', array('width' => '168', 'height' => '168')), '@homepage') ?>
        </div>
      </div>

      <div class="row">
        <div class="span4">
          <p><a href="#">More virtual exhibits</a></p>
        </div>
      </div>

    </div>

    <div class="span4" id="about">

      <h3>About <br/><span>Archives Canada</span></h3>
      <ul class="unstyled">
        <li><a href="#">About us</a></li>
        <li><a href="#">Networks</a></li>
        <li><a href="#">Contributors</a></li>
        <li><a href="#">Links</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">francais</a></li>
      </ul>

    </div>

  </div>

<?php else: ?>

  <div class="page">

    <h1><?php echo render_title($resource->getTitle(array('cultureFallback' => true))) ?></h1>

    <div>
      <?php echo render_value($resource->getContent(array('cultureFallback' => true))) ?>
    </div>

    <?php if (SecurityCheck::hasPermission($sf_user, array('module' => 'staticpage', 'action' => 'update'))): ?>
      <div class="actions section">

        <h2 class="element-invisible"><?php echo __('Actions') ?></h2>

        <div class="content">
          <ul class="links">
            <li><?php echo link_to(__('Edit'), array($resource, 'module' => 'staticpage', 'action' => 'edit'), array('title' => __('Edit this page'))) ?></li>
          </ul>
        </div>

      </div>
    <?php endif; ?>

  </div>

<?php endif; ?>