<?php include 'header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-danger text-white">Sum of Series</div>
                    <div class="card-body bg-secondary text-white">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                            <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" required value="<?php echo isset($result['starting_number']) ? $result['starting_number']: ' '; ?>" class="form-control" name="starting_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" required value="<?php echo isset($result['ending_number']) ? $result['ending_number']: ' '; ?>" class="form-control" name="ending_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php echo isset($result['result']) ? $result['result']: ' '; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="series_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
