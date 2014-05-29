<?php

function print_image_modal($id, $title, $img, $alt = '') {
  $str = <<<EOF
  <!-- Modal -->
  <div class="modal fade" id="$id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">$title</h4>
        </div>
        <div class="modal-body">
          <img src="$img" alt="$alt" class="img-full"/>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
EOF;

  return $str;
}