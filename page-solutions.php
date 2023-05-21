<?php get_header(); ?>
<div id="overFlow">
    <div id="start"></div>
    <header>

        <div id="header-wrapper" class="scroll-active">
            <div id="header-contents-box">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/toplogo.png" alt="kasuya portfolio">
                </a>
                <nav id="navi">
                    <ul class="wrapper">
                        <li><a href="<?php echo esc_url(home_url()); ?>/solutions">Solutions</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/works">Works</a></li>
                        <li><a href="<?php echo esc_url(home_url()); ?>/.#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobileHeaderWrapper">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/toplogo.png" alt="kasuya portfolio">
            </a>
            <div class="hamburger">
                <div id="mask"></div>
                <div class="nav" id="nav_f">
                    <nav id="nav_main_text">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url()); ?>/solutions">Solutions</a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/works">Works</a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/.#aboutBox" id="aboutClick">About</a></li>
                            <li><a href="#contact" id="contactClick">Contact</a></li>
                        </ul>
                    </nav>

                </div>
                <div id="target">
                    <div class="target_inner">
                        <span class="target_inner_line target_inner_1" id="line1"></span>
                        <span class="target_inner_line target_inner_2" id="line2"></span>
                        <span class="target_inner_line target_inner_3" id="line3"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="subTopBox">
            <div id="solutionsTop-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/solutionstop.jpg" alt="solutionstopimage">
            </div>


            <div class="subtop">
                <h4>Solutions</h4>
                <p>解決提案</p>
                <div class="indexBorder"></div>
            </div>
        </div>
    </header>
    <section id="mySkills">
        <div class="subIndexTitle">
            <h5><span class="sub-color">My</span> skills</h5>
            <p>出来る事</p>
        </div>
        <div id="skillBox">

            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon1.png" alt="skills-icon1"></dt>
                <dd>HTML</dd>
                <p>Webサイトの基本的なコーディングができます。</p>
            </dl>
            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon2.png" alt="skills-icon2"></dt>
                <dd>CSS</dd>
                <p>Webサイトの装飾(スタイリング)ができます。</p>
            </dl>
            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon3.png" alt="skills-icon3"></dt>
                <dd>Javascript</dd>
                <p>アニメーションなどWebサイトに動きの要素を与えます。</p>
            </dl>
            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon4.png" alt="skills-icon4"></dt>
                <dd>SASS</dd>
                <p>CSSをさらに拡張して、より効率的に書けます。</p>
            </dl>
            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon5.png" alt="skills-icon5"></dt>
                <dd>WordPress</dd>
                <p>Webサイトを簡単に動的運用する事ができます。</p>
            </dl>
            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon6.png" alt="skills-icon6"></dt>
                <dd>Figma</dd>
                <p>デザインカンプを制作する事ができます。</p>
            </dl>
            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon7.png" alt="skills-icon7"></dt>
                <dd>XD</dd>
                <p>デザインカンプを製作する事ができ、他のadobe製品と連携可能です。</p>
            </dl>
            <dl>
                <dt><img src="<?php echo esc_url(get_template_directory_uri()); ?>/_assets/img/skills-icon8.png" alt="skills-icon8"></dt>
                <dd>AfterEfects</dd>
                <p>簡単な動画編集、アニメーション制作ができます。</p>
            </dl>


        </div>






    </section>

    <section id="workFlow">
        <div class="subIndexTitle">
            <h5>Work <span class="sub-color">flow</span></h5>
            <p>お仕事の流れ</p>
        </div>
        <div id="workFlowBox">
            <div id="mainWorkFlowBox">
                <div id="workFlowBoxTop">
                    <dl>
                        <dt>１、ヒアリング</dt>
                        <dd>まずはお気軽にお問い合わせ頂ければ幸いです。サイトイメージやサイト製作の目的などの聞き取りを致します。</dd>
                    </dl>
                    <dl>
                        <dt>３、デザイン制作</dt>
                        <dd> ヒアリング内容を元にデザインを制作します。お客様と一緒にブラッシュアップしていきます</dd>
                    </dl>
                    <dl>
                        <dt>５、納品・運用サポート</dt>
                        <dd>WP構築後、運用方法など最終確認致します。特に問題無ければ納品致します。本件完了となります。
                            公開後の保守作業もご相談頂けます。</dd>
                    </dl>
                </div>
                <div id="workFlowLine"></div>
                <ul id="workFlowCircleBox">
                    <li class="workFlowCircle"></li>
                    <li class="workFlowCircle"></li>
                    <li class="workFlowCircle"></li>
                    <li class="workFlowCircle"></li>
                    <li class="workFlowCircle"></li>
                </ul>



                <div id="workFlowBoxBottom">
                    <dl>
                        <dt>２、お見積り・ご契約</dt>
                        <dd>お見積り提出致します。内容にご納得いただければご契約となります。
                            また、全体のスケジュール作成致します。</dd>
                    </dl>
                    <dl>
                        <dt>４、WordPress構築</dt>
                        <dd>お客様がご自身でブログや実績を更新出来るように、私のテスト環境にてWP構築を行います。</dd>
                    </dl>

                </div>
            </div>
            <div id="mobileWorkFlow">
                <div id="mobileWorkFlowLine"></div>
                <ul id="mobileWorkFlowCircleBox">
                    <li class="mobileWorkFlowCircle"></li>
                    <li class="mobileWorkFlowCircle"></li>
                    <li class="mobileWorkFlowCircle"></li>
                    <li class="mobileWorkFlowCircle"></li>
                    <li class="mobileWorkFlowCircle"></li>
                </ul>
                <div id="mobileWorkFlowBox">
                    <dl>
                        <dt>１、ヒアリング</dt>
                        <dd>まずはお気軽にお問い合わせ頂ければ幸いです。サイトイメージやサイト製作の目的などの聞き取りを致します。</dd>
                    </dl>
                    <dl>
                        <dt>２、お見積り・ご契約</dt>
                        <dd>お見積り提出致します。内容にご納得いただければご契約となります。
                            また、全体のスケジュール作成致します。</dd>
                    </dl>
                    <dl>
                        <dt>３、デザイン制作</dt>
                        <dd> ヒアリング内容を元にデザインを制作します。お客様と一緒にブラッシュアップしていきます</dd>
                    </dl>
                    <dl>
                        <dt>４、WordPress構築</dt>
                        <dd>お客様がご自身でブログや実績を更新出来るように、小生のテスト環境にてWP構築を行います。</dd>
                    </dl>
                    <dl>
                        <dt>５、納品・運用サポート</dt>
                        <dd>WP構築後、運用方法など最終確認致します。特に問題無ければ納品致します。本件完了となります。
                            公開後の保守作業もご相談頂けます。</dd>
                    </dl>
                </div>

            </div>
            <p id="workFlowComent">一例として、WordPressでの<br id="mobile_space">Webサイト構築の流れです。</p>

            <div id="arrowBox5">
                <a href="<?php echo esc_url(home_url()); ?>/works/">Works</a>
                <div id="arrow5"></div>
            </div>
        </div>

    </section>

    <?php get_footer(); ?>
