<!-- Character appear episode -->
<div class="row">
    <div class="col-md-10 col-xs-10">
            <?php
            if(isset($result_episode_list) && count($result_episode_list)>0)
            {
            ?>
                        <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Episode</th>
                                    <th>Name</th>
                                    <th>Aired Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php
                                  //echo "<pre>";
                                  //print_r($result_val);exit;

                                  foreach($result_episode_list as $val)
                                  {
                                    
                                  ?>
                                        <tr>
                                          <td><?=$val['episode']; ?></td>
                                          <td><?=$val['name']; ?></td>
                                          <td><?=$val['air_date']; ?></td>
                                        </tr>
                                        <?php
                                  }
                                  ?>
                                </tbody>
                          </table>
                          <?php
            }else{

              echo "No Result Found....";
            }
            ?>	
      </div>
</div>
