            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Project</h3>
                            <p class="text-subtitle text-muted">Edit project</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>home">Dashboard</a></li>
                                    <li class="breadcrumb-item">Project</li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>upload/update">
                                <input type="hidden" name="id_project" id="id_project" value="<?php echo $project->id_project; ?>"/>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama_project">Nama Project</label>
                                        <input type="text" class="form-control" value="<?php echo $project->nama_project; ?>" name="nama_project" id="nama_project"
                                            placeholder="Masukkan nama project">
                                    </div>

                                    <div class="form-group">
                                        <label for="deskripsi_project">Deskripsi Project</label>
                                        <textarea class="form-control" placeholder="Beri deskripsi project" name="deskripsi_project" id="deskripsi_project"
                                            rows="3"><?php echo $project->deskripsi_project; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="url">Alamat Website</label>
                                        <input type="text" class="form-control" value="<?php echo $project->url; ?>" name="url" id="url"
                                            placeholder="Masukkan alamat website">
                                    </div>

                                    <div class="form-group">
                                        <label for="owner">Nama Developer</label>
                                        <input type="text" class="form-control" value="<?php echo $project->owner; ?>" name="owner" id="owner"
                                            placeholder="Masukkan nama developer">
                                    </div>

                                    <div class="form-group">
                                        <label for="owner">No. Telp.</label>
                                        <input type="number" class="form-control" value="<?php echo $project->no_telp; ?>" name="no_telp" id="no_telp"
                                            placeholder="Masukkan no telp">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" value="<?php echo $project->email; ?>" name="email" id="email"
                                            placeholder="Masukkan email">
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" placeholder="Masukkan alamat" name="alamat" id="alamat"
                                            rows="2"><?php echo $project->alamat; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="thumbnail">Upload Thumbnail</label>
                                        <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                                    </div>

                                </div>

                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit"
                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>

            </div>