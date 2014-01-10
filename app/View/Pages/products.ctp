
<div id="content">
	<div class="container" id="legal">
		<div class="row"> 
			<!-- sidebar -->
			<div class="col-md-3 sidebar">
				<div class="section-menu">
					<ul class="nav nav-list">
						<li class="nav-header">In This Section</li><?PHP
						
						foreach($pageSections as $section){
						
							//active?
							if($section['ProductsPages']['id'] == $this->request->params['item']){
								$active = ' class="active"';
							}else{
								$active = '';
							}
						?>
						<li<?=$active?>><a href="/<?=$section['ProductsPages']['link']?>"><?=$section['ProductsPages']['name']?> <small><?=$section['ProductsPages']['byline']?></small><i class="fa fa-angle-right"></i></a></li><?PHP
						
						}
						
						?>
					</ul>
				</div>
			</div>
			
			<!--main content-->
			<div class="col-md-9">
				<h2 class="title-divider"><span><?=$pageContent['ProductsPages']['name1']?> <span class="de-em"><?=$pageContent['ProductsPages']['name2']?></span></span> <small><?=$pageContent['ProductsPages']['description']?></small></h2>
				<?=$pageContent['ProductsPages']['content']?>
				<?PHP
				
				//products list grouping
				if(isset($productFamilies)){
					
					?>
				<ul class="nav nav-tabs" data-js="quicksand" data-quicksand-trigger="li > a" data-quicksand-target=".products">
					<li class="active"><a href="#" data-quicksand-fid="all">All Items</a></li><?PHP
					
					foreach($productFamilies as $family){
						
						?>
					<li><a href="#" data-quicksand-fid="<?=$family['id']?>"><?=$family['id']?>00 Series</a></li><?PHP
					}
					
					?>
				</ul><?
				}
				
				//products list
				if(isset($products)){
					
					?>
				<ul class="row list-unstyled block products"><?PHP
					
					$i = 0;
					$type = $products['type'];
					unset($products['type']);
					
					foreach($products as $product){
						
						?>
	  				<li class="product type-media" data-quicksand-id="id-<?=$i?>" data-quicksand-tid="<?=$product[$type]['family']?>">
						<a href="#product<?=$product[$type]['id']?>-modal" data-toggle="modal" class="productDetail" productId="<?=$product[$type]['id']?>" productType="<?=$type?>">
							<span class="inner-wrapper">
								<span class="img-wrapper">
									<img src="/img/<?=strtolower($type).'s'?>/<?=$product[$type]['image']?>" alt="<?=$product[$type]['name']?>" />
								</span>
								<span class="title">
									<?=$product[$type]['name']?>
								</span>
								<!--<span class="description">
									Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.
								</span>-->
							</span>
						</a>
						<!--@modal - product modal-->
						<div class="modal fade" id="product<?=$product[$type]['id']?>-modal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title"><?=$product[$type]['name']?></h4>
									</div>
									<div class="modal-body">
                                        <span class="img-wrapper">
                                            <img src="/img/<?=strtolower($type).'s'?>/<?=$product[$type]['image']?>" alt="<?=$product[$type]['name']?>" />
                                        </span>
										<ul class="productDeets"><?PHP
										
										if(isset($product[$type]['diameter']) && $product[$type]['diameter'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Diameter:</div><div class="productDeetValue"><?=$product[$type]['diameter']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product[$type]['height']) && $product[$type]['height'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Height:</div><div class="productDeetValue"><?=$product[$type]['height']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product[$type]['volume']) && $product[$type]['volume'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Volume:</div><div class="productDeetValue"><?=$product[$type]['volume']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product[$type]['printable']) && $product[$type]['printable'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Printable:</div><div class="productDeetValue"><?=$product[$type]['printable']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product[$type]['case_count']) && $product[$type]['case_count'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Case Count:</div><div class="productDeetValue"><?=$product[$type]['case_count']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product[$type]['case_weight']) && $product[$type]['case_weight'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Case Weight:</div><div class="productDeetValue"><?=$product[$type]['case_weight']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product[$type]['case_pallet']) && $product[$type]['case_pallet'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Cases/Pallet:</div><div class="productDeetValue"><?=$product[$type]['case_pallet']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product['Ctype']['name']) && $product['Ctype']['name'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Container Type:</div><div class="productDeetValue"><?=$product['Ctype']['name']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product['Resin']['name']) && $product['Resin']['name'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Resin:</div><div class="productDeetValue"><?=$product['Resin']['name']?></div>
                                            </li><?PHP
											
										}
										
										if(isset($product[$type]['mold']) && $product[$type]['mold'] != ''){
										
										?>
											<li>
                                            	<div class="productDeetLabel">Molding Type:</div><div class="productDeetValue"><?=$product[$type]['mold']?></div>
                                            </li><?PHP
											
										}
											
											?>
										</ul>
									</div>
									<div class="modal-footer">
										<!--<small>Not a member? <a href="#" class="signup">Sign up now!</a></small><br />
										<small><a href="#">Forgotten password?</a></small>-->
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</li><?PHP
						$i++;
					}
					
					?>
				</ul><?
				}
				
				?>
			</div>
		</div>
	</div>
</div>