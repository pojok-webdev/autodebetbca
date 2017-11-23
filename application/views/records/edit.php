<!DOCTYPE html>
<html>
    <head>
        <title>Edit Grup Dupsb</title>
        <?php
        $this->load->view("commons/headcontent");
        ?>
        <link rel="stylesheet" href="/assets/js/autocomplete/styles.css" />
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        <!-- small navbar -->
        <?php $this->load->view("commons/topmenu");?>
        <!-- main / large navbar -->
        <?php $this->load->view("commons/level2menu");?>
        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
            <?php $this->load->view("commons/horizontalmenu");?>
                <!-- content -->
                <div class="col-md-10">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Edit  Record</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" action="/records/update" method="POST">
                                        <input type="hidden" name="totaldata" value="<?php echo $obj->totaldata;?>" />
                                        <input type="hidden" name="totalnominal" value="<?php echo $obj->totalnominal;?>" />
                                        <input type="hidden" name="filler" value="<?php echo $obj->filler;?>" />
                                        <input type="hidden" name="id" value="<?php echo $obj->id;?>" />
                                        <fieldset>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label" for="focusedInput">Kode Perusahaan</label>
                                            <div class="col-lg-8" id="the-basics">
                                                <input type="text" name="kodeperusahaan" value="<?php echo $obj->kodeperusahaan;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="col-lg-4 control-label" for="inputError">Mata Uang</label>
                                            <div class="col-lg-8">
                                                <label><?php echo $obj->matauang;?></label>
                                                <input type="hidden" name="matauang" value="<?php echo $obj->matauang;?>" />
                                            </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="col-lg-4 control-label" for="selectError">Tanggal Efektif AutoDebet</label>
                                            <div class="col-lg-8">
                                                <input type="text" id="inputWarning" name="tanggalefektifad" class="form-control" value="<?php echo $obj->tanggalefektifad;?>" placeholder="format: YYYYMMDD">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        <button type="reset" class="btn btn-default">Batalkan</button>
                                    </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php $this->load->view("commons/footer");?>
        <?php $this->load->view("commons/assets");?>

        <script type="text/javascript" src="/assets/js/autocomplete/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="/assets/js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
                var bts = [{"value":"170001-Ahmad Trianto (5c)","data":1},{"value":"170002-Irfan Hakim (5b)","data":2},{"value":"170003-Irwan Maulana (4d)","data":3}];

                $('#focusedInput').autocomplete({
                    lookup: bts,
                    onSelect: function(suggestion) {
                        $('#client_id').val(suggestion.data);
                        console.log('suggestion',suggestion);
                        //$('#selction-bts').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
                    },
                    onHint: function (hint) {
                        console.log('hint',hint);
                        //$('#autocomplete-bts-x').val(hint);
                    },
                    onInvalidateSelection: function() {
                        //$('#selction-bts').html('You selected: none');
                    }
                });
        </script>
        <script>
            (function($){
                $("#cashpay").change(function(){
                    $("#returnmoney").val($(this).val());
                });
            }(jQuery))
        </script>
    </body>
</html>
