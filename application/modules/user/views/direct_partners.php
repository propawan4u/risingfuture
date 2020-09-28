<!-- Main Area Strat Here -->
<div class="col-md-9 border border-info mt-1 rounded-lg text-light px-md-3">
    <div class="row">
        <div class="border border-info mt-3 rounded-lg text-light px-md-3 ml-3 mb-3">
            <h1><?php echo $title; ?></h1>
        </div>
    </div>
    <table id="example5" class="table table-striped table-bordered dt-responsive nowrap text-light table-background-light" style="width:100%;;">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Partner ID</th>
                <th>Mobile</th>
                <th>Date</th>
            </tr>
        </thead>
        <?php $count = 1;
        foreach ($getpartners as $show) {
        ?>
            <tbody>
                <td><?php echo $count++; ?></td>
                <td><?php echo $show->userID; ?></td>
                <td><?php echo $show->contact; ?></td>
                <td><?php echo $show->join_at; ?></td>
            </tbody>

        <?php
        }
        ?>
    </table>
</div>
<div class="col-md-8">

</div>
<!-- Main Area End Here -->
</div>
</div>
</div>
</section>
</body>

</html>