<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="page-header d-flex justify-content-between align-items-center">
            <h4 class="page-title">Supplier</h4>
            <div class="d-flex justify-content-start">
                <a href="<?= base_url('supplier/add') ?>" class="btn btn-icons btn-inverse-primary btn-new ml-2">
                    <i class="mdi mdi-plus"></i>
                </a>
            </div>
        </div>
        <div class="card card-noborder b-radius">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 table-responsive">

                        <table class="table table-custom" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Nomor Hp</th>
                                    <th>Alamat</th>
                                    <th style="width : 100px;">Deskripsi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($row->result() as $key => $data) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td>
                                            <?= $data->nama ?>
                                        </td>
                                        <td><?= $data->phone ?></td>
                                        <td><?= $data->address ?></td>
                                        <td><textarea style="width:150px; border:none;" rows="4" class="form-control"><?= $data->description ?></textarea></td>

                                        <td>
                                            <a href="<?= base_url('supplier/edit/' . $data->supplier_id) ?>">
                                                <button type="button" class="btn btn-edit btn-icons btn-rounded btn-secondary" data-toggle="modal" data-edit="1">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                            </a>
                                            <!-- <input type="hidden" name="supplier_id" value="<?= $data->id ?>">
                            <button onclick= "return confirm('Apakah anda yakin?')" class="btn btn-icons btn-rounded btn-secondary ml-1 btn-delete">
                                <i class="mdi mdi-close"></i> -->
                                            <a href="<?= base_url('supplier/del/' . $data->supplier_id) ?>">
                                                <button type="button" class="btn btn-edit btn-icons btn-rounded btn-secondary" onclick="return confirm('Apakah anda yakin?')" data-toggle="modal" data-edit="1">
                                                    <i class="mdi mdi-close"></i>
                                                </button>
                                            </a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>