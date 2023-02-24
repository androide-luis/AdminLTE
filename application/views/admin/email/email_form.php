<!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/iCheck/flat/blue.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="inbox" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>



     
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Redactar nuevo mensaje</h3>
            </div>
            <!-- /.box-header -->
            <?php echo form_open('/Admin/Email/send_email'); ?>
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" placeholder="Para:" name="to_email" required>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Asunto:" name="subject_email" required>
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="message_email" required class="form-control" style="height: 300px">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                        blinded by desire, that they cannot foresee</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
                    </textarea>
              </div>
              <div class="form-group">
                <div class="btn btn-default btn-file">
                  <i class="fa fa-paperclip"></i> Attachment
                  <input type="file" name="attachment">
                </div>
                <p class="help-block">Max. 32MB</p>
              </div>
            </div>
            <!-- /.box-body -->
          
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
            <!-- /.box-footer -->
              <?php echo form_close() ?>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<!-- iCheck -->
<script src="<?= base_url() ?>public/plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>