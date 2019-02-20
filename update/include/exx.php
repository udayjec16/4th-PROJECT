<div class="container">
                      <div class="row">
                          <div class="col-md-5">
                              <table class="table-sm">
                                <tbody>
                                    <tr>
                                        <td><span class="text-muted font-weight-bold">Name:</span></td>
                                        <td><?php echo $cust_row['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted font-weight-bold">Phone No:</span></td>
                                        <td><?php echo $cust_row['phone_no']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted font-weight-bold">Address:</span></td>
                                        <td> <?php echo $cust_row['address']; ?></td>
                                    </tr>
                                </tbody>
                              </table>
                          </div>
                          <div class="col-md-4"></div>
                          <div class="col-md-3">
                              <table class="table-sm">
                                <tbody>
                                    <tr>
                                        <td><span class="text-muted font-weight-bold">Order ID:</span></td>
                                        <td> <?php echo $order_id; ?></td>
                                    </tr>
                                    <tr>
                                        <td><span class="text-muted font-weight-bold">Bill Date:</span></td>
                                        <td> <?php echo $item_rows[0]['date'] ?></td>
                                    </tr>
                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>