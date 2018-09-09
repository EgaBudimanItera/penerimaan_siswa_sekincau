				<div id="mx-maincol" class="clearfix">
                    <div class="clr"></div>
                    <div id="inner_content" class="clearfix">
                        <!--Component Area-->

                        <div class="mx-component-area clearfix">
                            <div class="mx-inner clearfix">
                                <div id="system-message-container">
                                </div>

                                <div class="mx-component-area-inner clearfix" <?php if(!isset($link) || $link == 'dashboard' || $link == 'dashboard_login'){ echo 'style="background-color: #a50d0d;"'; }?> >
                                    <div class="contentpane" >
                                        <?php
											$this->load->view($page);
										?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottsite" class="clearfix">
    </div>
</div>
