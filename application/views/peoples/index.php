 <div class="container">
     <h3 class="mt-3">List Of Peoples</h3>
     <div class="row">
         <div class="col-md-6">
             <form action="<?= base_url('peoples'); ?>" method="POST">
                            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
                <div class="input-group-append">
                    <input class="btn btn-primary" type="submit" id="button-addon2" name="submit">
                </div>
                </div>
             </form>
         </div>
     </div>
     
     
     <div class="row">
         <div class="col-md-10">
             <h5>Result : <?= $total_rows; ?></h5>
             <table class="table">
                 <thead>
                     <tr>
                         <th>#</th>
                         <th>Name</th>
                         <th>E-mail</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                     <td colspan="4">
                     <?php if (empty($peoples) ) : ?>
                        <div class="alert alert-danger" role="alert">
                                Data Tidak Ada
                        </div>
                        </td>
                        </tr>
                        <?php endif; ?>
                     <?php foreach($peoples as $people)  : ?>
                     
                     <tr>
                         <th><?= ++$start; ?></th>
                         <td><?= $people['name']; ?></td>
                         <td><?= $people['email']; ?></td>
                         <td>
                             <a href="" class="badge badge-warning">Detail</a>
                             <a href="" class="badge badge-success">Edit</a>
                             <a href="" class="badge badge-danger">Delete</a>
                         </td>
                     </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>
             <?= $this->pagination->create_links(); ?>
         </div>
     </div>
 </div>