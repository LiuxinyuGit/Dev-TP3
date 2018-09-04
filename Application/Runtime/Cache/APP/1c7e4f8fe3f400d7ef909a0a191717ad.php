<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="/assets/rili/style.css">
</head>

<body>
  <div id="calendar">
    <header class="header">
      <ul>
        <li class="cur">月</li>
        <li>年</li>
      </ul>
    </header>
    <aside class="sidebar">
      <div class="wrapper">
        <div class="title">
          <span class="btn btn-prev">&lt;</span>
          <span class="date">2018年9月</span>
          <span class="btn btn-next">&gt;</span>
        </div>
        <ul class="week">
          <li>日</li>
          <li>一</li>
          <li>二</li>
          <li>三</li>
          <li>四</li>
          <li>五</li>
          <li>六</li>
        </ul>
        <ul class="day">
          <li data-time="20180726">26</li>
          <li data-time="20180727">27</li>
          <li data-time="20180728">28</li>
          <li data-time="20180729">29</li>
          <li data-time="20180730">30</li>
          <li data-time="20180731">31</li>
          <li data-time="20180801" class="cur-day">1</li>
          <li data-time="20180802" class="cur-month">2</li>
          <li data-time="20180803" class="cur-month">3</li>
          <li data-time="20180804" class="cur-month">4</li>
          <li data-time="20180805" class="cur-month">5</li>
          <li data-time="20180806" class="cur-month">6</li>
          <li data-time="20180807" class="cur-month">7</li>
          <li data-time="20180808" class="cur-month">8</li>
          <li data-time="20180809" class="cur-month">9</li>
          <li data-time="20180810" class="cur-month lunar-first">10</li>
          <li data-time="20180811" class="cur-month">11</li>
          <li data-time="20180812" class="cur-month">12</li>
          <li data-time="20180813" class="cur-month">13</li>
          <li data-time="20180814" class="cur-month">14</li>
          <li data-time="20180815" class="cur-month">15</li>
          <li data-time="20180816" class="cur-month">16</li>
          <li data-time="20180817" class="cur-month">17</li>
          <li data-time="20180818" class="cur-month">18</li>
          <li data-time="20180819" class="cur-month">19</li>
          <li data-time="20180820" class="cur-month">20</li>
          <li data-time="20180821" class="cur-month">21</li>
          <li data-time="20180822" class="cur-month">22</li>
          <li data-time="20180823" class="cur-month">23</li>
          <li data-time="20180824" class="cur-month">24</li>
          <li data-time="20180825" class="cur-month">25</li>
          <li data-time="20180826" class="cur-month">26</li>
          <li data-time="20180827" class="cur-month">27</li>
          <li data-time="20180828" class="cur-month">28</li>
          <li data-time="20180829" class="cur-month">29</li>
          <li data-time="20180830" class="cur-month">30</li>
          <li data-time="20180901">1</li>
          <li data-time="20180902">2</li>
          <li data-time="20180903">3</li>
          <li data-time="20180904">4</li>
          <li data-time="20180905">5</li>
          <li data-time="20180906">6</li>
        </ul>
      </div>
    </aside>
    <div class="container">
      <div id="renderMonth" class="render render-show">
        <h2 class="title">2018年9月</h2>
        <ul class="week">
          <li>周日</li>
          <li>周一</li>
          <li>周二</li>
          <li>周三</li>
          <li>周四</li>
          <li>周五</li>
          <li>周六</li>
        </ul>
        <ul class="day">
          <li data-time="20180726" class="weekend">
            <p class="info">
              <span class="lunar">十六</span>
              <span class="date"><em>26</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180727" class="">
            <p class="info">
              <span class="lunar">十七</span>
              <span class="date"><em>27</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180728" class="">
            <p class="info">
              <span class="lunar">十八</span>
              <span class="date"><em>28</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180729" class="">
            <p class="info">
              <span class="lunar">十九</span>
              <span class="date"><em>29</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180730" class="">
            <p class="info">
              <span class="lunar">廿十</span>
              <span class="date"><em>30</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180731" class="">
            <p class="info">
              <span class="lunar">廿一</span>
              <span class="date"><em>31</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180801" class="weekend cur-day">
            <p class="info">
              <span class="lunar">廿二</span>
              <span class="date"><em>1</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180802" class="weekend cur-month">
            <p class="info">
              <span class="lunar">廿三</span>
              <span class="date"><em>2</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180803" class="cur-month">
            <p class="info">
              <span class="lunar">廿四</span>
              <span class="date"><em>3</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180804" class="cur-month">
            <p class="info">
              <span class="lunar">廿五</span>
              <span class="date"><em>4</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180805" class="cur-month">
            <p class="info">
              <span class="lunar">廿六</span>
              <span class="date"><em>5</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180806" class="cur-month">
            <p class="info">
              <span class="lunar">廿七</span>
              <span class="date"><em>6</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180807" class="cur-month">
            <p class="info">
              <span class="lunar">廿八</span>
              <span class="date"><em>7</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180808" class="weekend cur-month">
            <p class="info">
              <span class="lunar">廿九</span>
              <span class="date"><em>8</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term show">白露</p>
          </li>
          <li data-time="20180809" class="weekend cur-month">
            <p class="info">
              <span class="lunar">卅十</span>
              <span class="date"><em>9</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180810" class="cur-month">
            <p class="info">
              <span class="lunar first-lunarday">八月初一</span>
              <span class="date"><em>10</em>日</span>
            </p>
            <p class="festival show">教师节</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180811" class="cur-month">
            <p class="info">
              <span class="lunar">初二</span>
              <span class="date"><em>11</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180812" class="cur-month">
            <p class="info">
              <span class="lunar">初三</span>
              <span class="date"><em>12</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180813" class="cur-month">
            <p class="info">
              <span class="lunar">初四</span>
              <span class="date"><em>13</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180814" class="cur-month">
            <p class="info">
              <span class="lunar">初五</span>
              <span class="date"><em>14</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180815" class="weekend cur-month">
            <p class="info">
              <span class="lunar">初六</span>
              <span class="date"><em>15</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180816" class="weekend cur-month">
            <p class="info">
              <span class="lunar">初七</span>
              <span class="date"><em>16</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180817" class="cur-month">
            <p class="info">
              <span class="lunar">初八</span>
              <span class="date"><em>17</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180818" class="cur-month">
            <p class="info">
              <span class="lunar">初九</span>
              <span class="date"><em>18</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180819" class="cur-month">
            <p class="info">
              <span class="lunar">初十</span>
              <span class="date"><em>19</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180820" class="cur-month">
            <p class="info">
              <span class="lunar">十一</span>
              <span class="date"><em>20</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180821" class="cur-month">
            <p class="info">
              <span class="lunar">十二</span>
              <span class="date"><em>21</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180822" class="weekend cur-month">
            <p class="info">
              <span class="lunar">十三</span>
              <span class="date"><em>22</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180823" class="weekend cur-month">
            <p class="info">
              <span class="lunar">十四</span>
              <span class="date"><em>23</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term show">秋分</p>
          </li>
          <li data-time="20180824" class="cur-month">
            <p class="info">
              <span class="lunar">十五</span>
              <span class="date"><em>24</em>日</span>
            </p>
            <p class="festival show">中秋节</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180825" class="cur-month">
            <p class="info">
              <span class="lunar">十六</span>
              <span class="date"><em>25</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180826" class="cur-month">
            <p class="info">
              <span class="lunar">十七</span>
              <span class="date"><em>26</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180827" class="cur-month">
            <p class="info">
              <span class="lunar">十八</span>
              <span class="date"><em>27</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180828" class="cur-month">
            <p class="info">
              <span class="lunar">十九</span>
              <span class="date"><em>28</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180829" class="weekend cur-month">
            <p class="info">
              <span class="lunar">廿十</span>
              <span class="date"><em>29</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180830" class="weekend cur-month">
            <p class="info">
              <span class="lunar">廿一</span>
              <span class="date"><em>30</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180901" class="">
            <p class="info">
              <span class="lunar">廿二</span>
              <span class="date"><em>1</em>日</span>
            </p>
            <p class="festival show">国庆节</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180902" class="">
            <p class="info">
              <span class="lunar">廿三</span>
              <span class="date"><em>2</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180903" class="">
            <p class="info">
              <span class="lunar">廿四</span>
              <span class="date"><em>3</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180904" class="">
            <p class="info">
              <span class="lunar">廿五</span>
              <span class="date"><em>4</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180905" class="">
            <p class="info">
              <span class="lunar">廿六</span>
              <span class="date"><em>5</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
          <li data-time="20180906" class="weekend">
            <p class="info">
              <span class="lunar">廿七</span>
              <span class="date"><em>6</em>日</span>
            </p>
            <p class="festival">undefined</p>
            <p class="term">undefined</p>
          </li>
        </ul>
      </div>
      <div id="renderFullYear" class="render">
        <div class="title">
          <h2>2018年</h2>
          <p>
            <span class="lunar-year"><i></i>戊戌狗年</span>
            <span class="info"><i></i>农历初一</span>
          </p>
        </div>
        <ul class="month">
          <li class="item">
            <div class="title">January</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20171131">31</li>
              <li data-time="20180001" class="cur-month">1</li>
              <li data-time="20180002" class="cur-month">2</li>
              <li data-time="20180003" class="cur-month">3</li>
              <li data-time="20180004" class="cur-month">4</li>
              <li data-time="20180005" class="cur-month">5</li>
              <li data-time="20180006" class="cur-month">6</li>
              <li data-time="20180007" class="cur-month">7</li>
              <li data-time="20180008" class="cur-month">8</li>
              <li data-time="20180009" class="cur-month">9</li>
              <li data-time="20180010" class="cur-month">10</li>
              <li data-time="20180011" class="cur-month">11</li>
              <li data-time="20180012" class="cur-month">12</li>
              <li data-time="20180013" class="cur-month">13</li>
              <li data-time="20180014" class="cur-month">14</li>
              <li data-time="20180015" class="cur-month">15</li>
              <li data-time="20180016" class="cur-month">16</li>
              <li data-time="20180017" class="cur-month lunar-first">17</li>
              <li data-time="20180018" class="cur-month">18</li>
              <li data-time="20180019" class="cur-month">19</li>
              <li data-time="20180020" class="cur-month">20</li>
              <li data-time="20180021" class="cur-month">21</li>
              <li data-time="20180022" class="cur-month">22</li>
              <li data-time="20180023" class="cur-month">23</li>
              <li data-time="20180024" class="cur-month">24</li>
              <li data-time="20180025" class="cur-month">25</li>
              <li data-time="20180026" class="cur-month">26</li>
              <li data-time="20180027" class="cur-month">27</li>
              <li data-time="20180028" class="cur-month">28</li>
              <li data-time="20180029" class="cur-month">29</li>
              <li data-time="20180030" class="cur-month">30</li>
              <li data-time="20180031" class="cur-month">31</li>
              <li data-time="20180101">1</li>
              <li data-time="20180102">2</li>
              <li data-time="20180103">3</li>
              <li data-time="20180104">4</li>
              <li data-time="20180105">5</li>
              <li data-time="20180106">6</li>
              <li data-time="20180107">7</li>
              <li data-time="20180108">8</li>
              <li data-time="20180109">9</li>
              <li data-time="20180110">10</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">Febuary</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180028">28</li>
              <li data-time="20180029">29</li>
              <li data-time="20180030">30</li>
              <li data-time="20180031">31</li>
              <li data-time="20180101" class="cur-month">1</li>
              <li data-time="20180102" class="cur-month">2</li>
              <li data-time="20180103" class="cur-month">3</li>
              <li data-time="20180104" class="cur-month">4</li>
              <li data-time="20180105" class="cur-month">5</li>
              <li data-time="20180106" class="cur-month">6</li>
              <li data-time="20180107" class="cur-month">7</li>
              <li data-time="20180108" class="cur-month">8</li>
              <li data-time="20180109" class="cur-month">9</li>
              <li data-time="20180110" class="cur-month">10</li>
              <li data-time="20180111" class="cur-month">11</li>
              <li data-time="20180112" class="cur-month">12</li>
              <li data-time="20180113" class="cur-month">13</li>
              <li data-time="20180114" class="cur-month">14</li>
              <li data-time="20180115" class="cur-month">15</li>
              <li data-time="20180116" class="cur-month lunar-january">16</li>
              <li data-time="20180117" class="cur-month">17</li>
              <li data-time="20180118" class="cur-month">18</li>
              <li data-time="20180119" class="cur-month">19</li>
              <li data-time="20180120" class="cur-month">20</li>
              <li data-time="20180121" class="cur-month">21</li>
              <li data-time="20180122" class="cur-month">22</li>
              <li data-time="20180123" class="cur-month">23</li>
              <li data-time="20180124" class="cur-month">24</li>
              <li data-time="20180125" class="cur-month">25</li>
              <li data-time="20180126" class="cur-month">26</li>
              <li data-time="20180127" class="cur-month">27</li>
              <li data-time="20180128" class="cur-month">28</li>
              <li data-time="20180201">1</li>
              <li data-time="20180202">2</li>
              <li data-time="20180203">3</li>
              <li data-time="20180204">4</li>
              <li data-time="20180205">5</li>
              <li data-time="20180206">6</li>
              <li data-time="20180207">7</li>
              <li data-time="20180208">8</li>
              <li data-time="20180209">9</li>
              <li data-time="20180210">10</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">March</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180125">25</li>
              <li data-time="20180126">26</li>
              <li data-time="20180127">27</li>
              <li data-time="20180128">28</li>
              <li data-time="20180201" class="cur-month">1</li>
              <li data-time="20180202" class="cur-month">2</li>
              <li data-time="20180203" class="cur-month">3</li>
              <li data-time="20180204" class="cur-month">4</li>
              <li data-time="20180205" class="cur-month">5</li>
              <li data-time="20180206" class="cur-month">6</li>
              <li data-time="20180207" class="cur-month">7</li>
              <li data-time="20180208" class="cur-month">8</li>
              <li data-time="20180209" class="cur-month">9</li>
              <li data-time="20180210" class="cur-month">10</li>
              <li data-time="20180211" class="cur-month">11</li>
              <li data-time="20180212" class="cur-month">12</li>
              <li data-time="20180213" class="cur-month">13</li>
              <li data-time="20180214" class="cur-month">14</li>
              <li data-time="20180215" class="cur-month">15</li>
              <li data-time="20180216" class="cur-month">16</li>
              <li data-time="20180217" class="cur-month lunar-first">17</li>
              <li data-time="20180218" class="cur-month">18</li>
              <li data-time="20180219" class="cur-month">19</li>
              <li data-time="20180220" class="cur-month">20</li>
              <li data-time="20180221" class="cur-month">21</li>
              <li data-time="20180222" class="cur-month">22</li>
              <li data-time="20180223" class="cur-month">23</li>
              <li data-time="20180224" class="cur-month">24</li>
              <li data-time="20180225" class="cur-month">25</li>
              <li data-time="20180226" class="cur-month">26</li>
              <li data-time="20180227" class="cur-month">27</li>
              <li data-time="20180228" class="cur-month">28</li>
              <li data-time="20180229" class="cur-month">29</li>
              <li data-time="20180230" class="cur-month">30</li>
              <li data-time="20180231" class="cur-month">31</li>
              <li data-time="20180301">1</li>
              <li data-time="20180302">2</li>
              <li data-time="20180303">3</li>
              <li data-time="20180304">4</li>
              <li data-time="20180305">5</li>
              <li data-time="20180306">6</li>
              <li data-time="20180307">7</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">April</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180301" class="cur-month">1</li>
              <li data-time="20180302" class="cur-month">2</li>
              <li data-time="20180303" class="cur-month">3</li>
              <li data-time="20180304" class="cur-month">4</li>
              <li data-time="20180305" class="cur-month">5</li>
              <li data-time="20180306" class="cur-month">6</li>
              <li data-time="20180307" class="cur-month">7</li>
              <li data-time="20180308" class="cur-month">8</li>
              <li data-time="20180309" class="cur-month">9</li>
              <li data-time="20180310" class="cur-month">10</li>
              <li data-time="20180311" class="cur-month">11</li>
              <li data-time="20180312" class="cur-month">12</li>
              <li data-time="20180313" class="cur-month">13</li>
              <li data-time="20180314" class="cur-month">14</li>
              <li data-time="20180315" class="cur-month">15</li>
              <li data-time="20180316" class="cur-month lunar-first">16</li>
              <li data-time="20180317" class="cur-month">17</li>
              <li data-time="20180318" class="cur-month">18</li>
              <li data-time="20180319" class="cur-month">19</li>
              <li data-time="20180320" class="cur-month">20</li>
              <li data-time="20180321" class="cur-month">21</li>
              <li data-time="20180322" class="cur-month">22</li>
              <li data-time="20180323" class="cur-month">23</li>
              <li data-time="20180324" class="cur-month">24</li>
              <li data-time="20180325" class="cur-month">25</li>
              <li data-time="20180326" class="cur-month">26</li>
              <li data-time="20180327" class="cur-month">27</li>
              <li data-time="20180328" class="cur-month">28</li>
              <li data-time="20180329" class="cur-month">29</li>
              <li data-time="20180330" class="cur-month">30</li>
              <li data-time="20180401">1</li>
              <li data-time="20180402">2</li>
              <li data-time="20180403">3</li>
              <li data-time="20180404">4</li>
              <li data-time="20180405">5</li>
              <li data-time="20180406">6</li>
              <li data-time="20180407">7</li>
              <li data-time="20180408">8</li>
              <li data-time="20180409">9</li>
              <li data-time="20180410">10</li>
              <li data-time="20180411">11</li>
              <li data-time="20180412">12</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">May</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180329">29</li>
              <li data-time="20180330">30</li>
              <li data-time="20180401" class="cur-month">1</li>
              <li data-time="20180402" class="cur-month">2</li>
              <li data-time="20180403" class="cur-month">3</li>
              <li data-time="20180404" class="cur-month">4</li>
              <li data-time="20180405" class="cur-month">5</li>
              <li data-time="20180406" class="cur-month">6</li>
              <li data-time="20180407" class="cur-month">7</li>
              <li data-time="20180408" class="cur-month">8</li>
              <li data-time="20180409" class="cur-month">9</li>
              <li data-time="20180410" class="cur-month">10</li>
              <li data-time="20180411" class="cur-month">11</li>
              <li data-time="20180412" class="cur-month">12</li>
              <li data-time="20180413" class="cur-month">13</li>
              <li data-time="20180414" class="cur-month">14</li>
              <li data-time="20180415" class="cur-month lunar-first">15</li>
              <li data-time="20180416" class="cur-month">16</li>
              <li data-time="20180417" class="cur-month">17</li>
              <li data-time="20180418" class="cur-month">18</li>
              <li data-time="20180419" class="cur-month">19</li>
              <li data-time="20180420" class="cur-month">20</li>
              <li data-time="20180421" class="cur-month">21</li>
              <li data-time="20180422" class="cur-month">22</li>
              <li data-time="20180423" class="cur-month">23</li>
              <li data-time="20180424" class="cur-month">24</li>
              <li data-time="20180425" class="cur-month">25</li>
              <li data-time="20180426" class="cur-month">26</li>
              <li data-time="20180427" class="cur-month">27</li>
              <li data-time="20180428" class="cur-month">28</li>
              <li data-time="20180429" class="cur-month">29</li>
              <li data-time="20180430" class="cur-month">30</li>
              <li data-time="20180431" class="cur-month">31</li>
              <li data-time="20180501">1</li>
              <li data-time="20180502">2</li>
              <li data-time="20180503">3</li>
              <li data-time="20180504">4</li>
              <li data-time="20180505">5</li>
              <li data-time="20180506">6</li>
              <li data-time="20180507">7</li>
              <li data-time="20180508">8</li>
              <li data-time="20180509">9</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">June</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180427">27</li>
              <li data-time="20180428">28</li>
              <li data-time="20180429">29</li>
              <li data-time="20180430">30</li>
              <li data-time="20180431">31</li>
              <li data-time="20180501" class="cur-month">1</li>
              <li data-time="20180502" class="cur-month">2</li>
              <li data-time="20180503" class="cur-month">3</li>
              <li data-time="20180504" class="cur-month">4</li>
              <li data-time="20180505" class="cur-month">5</li>
              <li data-time="20180506" class="cur-month">6</li>
              <li data-time="20180507" class="cur-month">7</li>
              <li data-time="20180508" class="cur-month">8</li>
              <li data-time="20180509" class="cur-month">9</li>
              <li data-time="20180510" class="cur-month">10</li>
              <li data-time="20180511" class="cur-month">11</li>
              <li data-time="20180512" class="cur-month">12</li>
              <li data-time="20180513" class="cur-month">13</li>
              <li data-time="20180514" class="cur-month lunar-first">14</li>
              <li data-time="20180515" class="cur-month">15</li>
              <li data-time="20180516" class="cur-month">16</li>
              <li data-time="20180517" class="cur-month">17</li>
              <li data-time="20180518" class="cur-month">18</li>
              <li data-time="20180519" class="cur-month">19</li>
              <li data-time="20180520" class="cur-month">20</li>
              <li data-time="20180521" class="cur-month">21</li>
              <li data-time="20180522" class="cur-month">22</li>
              <li data-time="20180523" class="cur-month">23</li>
              <li data-time="20180524" class="cur-month">24</li>
              <li data-time="20180525" class="cur-month">25</li>
              <li data-time="20180526" class="cur-month">26</li>
              <li data-time="20180527" class="cur-month">27</li>
              <li data-time="20180528" class="cur-month">28</li>
              <li data-time="20180529" class="cur-month">29</li>
              <li data-time="20180530" class="cur-month">30</li>
              <li data-time="20180601">1</li>
              <li data-time="20180602">2</li>
              <li data-time="20180603">3</li>
              <li data-time="20180604">4</li>
              <li data-time="20180605">5</li>
              <li data-time="20180606">6</li>
              <li data-time="20180607">7</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">July</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180601" class="cur-month">1</li>
              <li data-time="20180602" class="cur-month">2</li>
              <li data-time="20180603" class="cur-month">3</li>
              <li data-time="20180604" class="cur-month">4</li>
              <li data-time="20180605" class="cur-month">5</li>
              <li data-time="20180606" class="cur-month">6</li>
              <li data-time="20180607" class="cur-month">7</li>
              <li data-time="20180608" class="cur-month">8</li>
              <li data-time="20180609" class="cur-month">9</li>
              <li data-time="20180610" class="cur-month">10</li>
              <li data-time="20180611" class="cur-month">11</li>
              <li data-time="20180612" class="cur-month">12</li>
              <li data-time="20180613" class="cur-month lunar-first">13</li>
              <li data-time="20180614" class="cur-month">14</li>
              <li data-time="20180615" class="cur-month">15</li>
              <li data-time="20180616" class="cur-month">16</li>
              <li data-time="20180617" class="cur-month">17</li>
              <li data-time="20180618" class="cur-month">18</li>
              <li data-time="20180619" class="cur-month">19</li>
              <li data-time="20180620" class="cur-month">20</li>
              <li data-time="20180621" class="cur-month">21</li>
              <li data-time="20180622" class="cur-month">22</li>
              <li data-time="20180623" class="cur-month">23</li>
              <li data-time="20180624" class="cur-month">24</li>
              <li data-time="20180625" class="cur-month">25</li>
              <li data-time="20180626" class="cur-month">26</li>
              <li data-time="20180627" class="cur-month">27</li>
              <li data-time="20180628" class="cur-month">28</li>
              <li data-time="20180629" class="cur-month">29</li>
              <li data-time="20180630" class="cur-month">30</li>
              <li data-time="20180631" class="cur-month">31</li>
              <li data-time="20180701">1</li>
              <li data-time="20180702">2</li>
              <li data-time="20180703">3</li>
              <li data-time="20180704">4</li>
              <li data-time="20180705">5</li>
              <li data-time="20180706">6</li>
              <li data-time="20180707">7</li>
              <li data-time="20180708">8</li>
              <li data-time="20180709">9</li>
              <li data-time="20180710">10</li>
              <li data-time="20180711" class="lunar-first">11</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">August</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180629">29</li>
              <li data-time="20180630">30</li>
              <li data-time="20180631">31</li>
              <li data-time="20180701" class="cur-month">1</li>
              <li data-time="20180702" class="cur-month">2</li>
              <li data-time="20180703" class="cur-month">3</li>
              <li data-time="20180704" class="cur-month">4</li>
              <li data-time="20180705" class="cur-month">5</li>
              <li data-time="20180706" class="cur-month">6</li>
              <li data-time="20180707" class="cur-month">7</li>
              <li data-time="20180708" class="cur-month">8</li>
              <li data-time="20180709" class="cur-month">9</li>
              <li data-time="20180710" class="cur-month">10</li>
              <li data-time="20180711" class="cur-month lunar-first">11</li>
              <li data-time="20180712" class="cur-month">12</li>
              <li data-time="20180713" class="cur-month">13</li>
              <li data-time="20180714" class="cur-month">14</li>
              <li data-time="20180715" class="cur-month">15</li>
              <li data-time="20180716" class="cur-month">16</li>
              <li data-time="20180717" class="cur-month">17</li>
              <li data-time="20180718" class="cur-month">18</li>
              <li data-time="20180719" class="cur-month">19</li>
              <li data-time="20180720" class="cur-month">20</li>
              <li data-time="20180721" class="cur-month">21</li>
              <li data-time="20180722" class="cur-month">22</li>
              <li data-time="20180723" class="cur-month">23</li>
              <li data-time="20180724" class="cur-month">24</li>
              <li data-time="20180725" class="cur-month">25</li>
              <li data-time="20180726" class="cur-month">26</li>
              <li data-time="20180727" class="cur-month">27</li>
              <li data-time="20180728" class="cur-month">28</li>
              <li data-time="20180729" class="cur-month">29</li>
              <li data-time="20180730" class="cur-month">30</li>
              <li data-time="20180731" class="cur-month">31</li>
              <li data-time="20180801" class="cur-day">1</li>
              <li data-time="20180802">2</li>
              <li data-time="20180803">3</li>
              <li data-time="20180804">4</li>
              <li data-time="20180805">5</li>
              <li data-time="20180806">6</li>
              <li data-time="20180807">7</li>
              <li data-time="20180808">8</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">September</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180726">26</li>
              <li data-time="20180727">27</li>
              <li data-time="20180728">28</li>
              <li data-time="20180729">29</li>
              <li data-time="20180730">30</li>
              <li data-time="20180731">31</li>
              <li data-time="20180801" class="cur-day">1</li>
              <li data-time="20180802" class="cur-month">2</li>
              <li data-time="20180803" class="cur-month">3</li>
              <li data-time="20180804" class="cur-month">4</li>
              <li data-time="20180805" class="cur-month">5</li>
              <li data-time="20180806" class="cur-month">6</li>
              <li data-time="20180807" class="cur-month">7</li>
              <li data-time="20180808" class="cur-month">8</li>
              <li data-time="20180809" class="cur-month">9</li>
              <li data-time="20180810" class="cur-month lunar-first">10</li>
              <li data-time="20180811" class="cur-month">11</li>
              <li data-time="20180812" class="cur-month">12</li>
              <li data-time="20180813" class="cur-month">13</li>
              <li data-time="20180814" class="cur-month">14</li>
              <li data-time="20180815" class="cur-month">15</li>
              <li data-time="20180816" class="cur-month">16</li>
              <li data-time="20180817" class="cur-month">17</li>
              <li data-time="20180818" class="cur-month">18</li>
              <li data-time="20180819" class="cur-month">19</li>
              <li data-time="20180820" class="cur-month">20</li>
              <li data-time="20180821" class="cur-month">21</li>
              <li data-time="20180822" class="cur-month">22</li>
              <li data-time="20180823" class="cur-month">23</li>
              <li data-time="20180824" class="cur-month">24</li>
              <li data-time="20180825" class="cur-month">25</li>
              <li data-time="20180826" class="cur-month">26</li>
              <li data-time="20180827" class="cur-month">27</li>
              <li data-time="20180828" class="cur-month">28</li>
              <li data-time="20180829" class="cur-month">29</li>
              <li data-time="20180830" class="cur-month">30</li>
              <li data-time="20180901">1</li>
              <li data-time="20180902">2</li>
              <li data-time="20180903">3</li>
              <li data-time="20180904">4</li>
              <li data-time="20180905">5</li>
              <li data-time="20180906">6</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">Octorber</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180830">30</li>
              <li data-time="20180901" class="cur-month">1</li>
              <li data-time="20180902" class="cur-month">2</li>
              <li data-time="20180903" class="cur-month">3</li>
              <li data-time="20180904" class="cur-month">4</li>
              <li data-time="20180905" class="cur-month">5</li>
              <li data-time="20180906" class="cur-month">6</li>
              <li data-time="20180907" class="cur-month">7</li>
              <li data-time="20180908" class="cur-month">8</li>
              <li data-time="20180909" class="cur-month lunar-first">9</li>
              <li data-time="20180910" class="cur-month">10</li>
              <li data-time="20180911" class="cur-month">11</li>
              <li data-time="20180912" class="cur-month">12</li>
              <li data-time="20180913" class="cur-month">13</li>
              <li data-time="20180914" class="cur-month">14</li>
              <li data-time="20180915" class="cur-month">15</li>
              <li data-time="20180916" class="cur-month">16</li>
              <li data-time="20180917" class="cur-month">17</li>
              <li data-time="20180918" class="cur-month">18</li>
              <li data-time="20180919" class="cur-month">19</li>
              <li data-time="20180920" class="cur-month">20</li>
              <li data-time="20180921" class="cur-month">21</li>
              <li data-time="20180922" class="cur-month">22</li>
              <li data-time="20180923" class="cur-month">23</li>
              <li data-time="20180924" class="cur-month">24</li>
              <li data-time="20180925" class="cur-month">25</li>
              <li data-time="20180926" class="cur-month">26</li>
              <li data-time="20180927" class="cur-month">27</li>
              <li data-time="20180928" class="cur-month">28</li>
              <li data-time="20180929" class="cur-month">29</li>
              <li data-time="20180930" class="cur-month">30</li>
              <li data-time="20180931" class="cur-month">31</li>
              <li data-time="20181001">1</li>
              <li data-time="20181002">2</li>
              <li data-time="20181003">3</li>
              <li data-time="20181004">4</li>
              <li data-time="20181005">5</li>
              <li data-time="20181006">6</li>
              <li data-time="20181007">7</li>
              <li data-time="20181008" class="lunar-first">8</li>
              <li data-time="20181009">9</li>
              <li data-time="20181010">10</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">November</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20180928">28</li>
              <li data-time="20180929">29</li>
              <li data-time="20180930">30</li>
              <li data-time="20180931">31</li>
              <li data-time="20181001" class="cur-month">1</li>
              <li data-time="20181002" class="cur-month">2</li>
              <li data-time="20181003" class="cur-month">3</li>
              <li data-time="20181004" class="cur-month">4</li>
              <li data-time="20181005" class="cur-month">5</li>
              <li data-time="20181006" class="cur-month">6</li>
              <li data-time="20181007" class="cur-month">7</li>
              <li data-time="20181008" class="cur-month lunar-first">8</li>
              <li data-time="20181009" class="cur-month">9</li>
              <li data-time="20181010" class="cur-month">10</li>
              <li data-time="20181011" class="cur-month">11</li>
              <li data-time="20181012" class="cur-month">12</li>
              <li data-time="20181013" class="cur-month">13</li>
              <li data-time="20181014" class="cur-month">14</li>
              <li data-time="20181015" class="cur-month">15</li>
              <li data-time="20181016" class="cur-month">16</li>
              <li data-time="20181017" class="cur-month">17</li>
              <li data-time="20181018" class="cur-month">18</li>
              <li data-time="20181019" class="cur-month">19</li>
              <li data-time="20181020" class="cur-month">20</li>
              <li data-time="20181021" class="cur-month">21</li>
              <li data-time="20181022" class="cur-month">22</li>
              <li data-time="20181023" class="cur-month">23</li>
              <li data-time="20181024" class="cur-month">24</li>
              <li data-time="20181025" class="cur-month">25</li>
              <li data-time="20181026" class="cur-month">26</li>
              <li data-time="20181027" class="cur-month">27</li>
              <li data-time="20181028" class="cur-month">28</li>
              <li data-time="20181029" class="cur-month">29</li>
              <li data-time="20181030" class="cur-month">30</li>
              <li data-time="20181101">1</li>
              <li data-time="20181102">2</li>
              <li data-time="20181103">3</li>
              <li data-time="20181104">4</li>
              <li data-time="20181105">5</li>
              <li data-time="20181106">6</li>
              <li data-time="20181107" class="lunar-first">7</li>
              <li data-time="20181108">8</li>
            </ul>
          </li>
          <li class="item">
            <div class="title">December</div>
            <ul class="week">
              <li>日</li>
              <li>一</li>
              <li>二</li>
              <li>三</li>
              <li>四</li>
              <li>五</li>
              <li>六</li>
            </ul>
            <ul class="day">
              <li data-time="20181025">25</li>
              <li data-time="20181026">26</li>
              <li data-time="20181027">27</li>
              <li data-time="20181028">28</li>
              <li data-time="20181029">29</li>
              <li data-time="20181030">30</li>
              <li data-time="20181101" class="cur-month">1</li>
              <li data-time="20181102" class="cur-month">2</li>
              <li data-time="20181103" class="cur-month">3</li>
              <li data-time="20181104" class="cur-month">4</li>
              <li data-time="20181105" class="cur-month">5</li>
              <li data-time="20181106" class="cur-month">6</li>
              <li data-time="20181107" class="cur-month lunar-first">7</li>
              <li data-time="20181108" class="cur-month">8</li>
              <li data-time="20181109" class="cur-month">9</li>
              <li data-time="20181110" class="cur-month">10</li>
              <li data-time="20181111" class="cur-month">11</li>
              <li data-time="20181112" class="cur-month">12</li>
              <li data-time="20181113" class="cur-month">13</li>
              <li data-time="20181114" class="cur-month">14</li>
              <li data-time="20181115" class="cur-month">15</li>
              <li data-time="20181116" class="cur-month">16</li>
              <li data-time="20181117" class="cur-month">17</li>
              <li data-time="20181118" class="cur-month">18</li>
              <li data-time="20181119" class="cur-month">19</li>
              <li data-time="20181120" class="cur-month">20</li>
              <li data-time="20181121" class="cur-month">21</li>
              <li data-time="20181122" class="cur-month">22</li>
              <li data-time="20181123" class="cur-month">23</li>
              <li data-time="20181124" class="cur-month">24</li>
              <li data-time="20181125" class="cur-month">25</li>
              <li data-time="20181126" class="cur-month">26</li>
              <li data-time="20181127" class="cur-month">27</li>
              <li data-time="20181128" class="cur-month">28</li>
              <li data-time="20181129" class="cur-month">29</li>
              <li data-time="20181130" class="cur-month">30</li>
              <li data-time="20181131" class="cur-month">31</li>
              <li data-time="20190001">1</li>
              <li data-time="20190002">2</li>
              <li data-time="20190003">3</li>
              <li data-time="20190004">4</li>
              <li data-time="20190005">5</li>
            </ul>
          </li>
        </ul>
      </div>
      <div id="control">
        <input type="button" value="<" class="btn btn-prev">
        <input type="button" value="今天" class="today">
        <input type="button" value=">" class="btn btn-next">
      </div>
      <div id="popup" style="display: none;">
        <h3 class="title">七夕节</h3>
        <i class="arrow arrow-left"></i>
        <i class="arrow arrow-right"></i>
        <p class="date">2017年8月28日</p>
        <p class="lunar">丁酉鸡年</p>
      </div>
    </div>
  </div>
  <script src="/assets/rili/tools.js"></script>
  <script src="/assets/rili/ChineseCalendar.js"></script>
  <script src="/assets/rili/calender.js"></script>
</body>

</html>