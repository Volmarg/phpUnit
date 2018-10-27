<h1> Simple phpUnit tests </h1>

<p>
This repo contains simple phpUnit based tests.
</p>

<h4>Testing/checking/using</h4>
<hr/>

<ul>
<li>PHP 7.x</li>
<li>PHP storm,
    <ul>
        <li>Automatic phpUnit retests,</li>
    </ul></li>    
<li>phpUnit (remote),
    <ul>
        <li>assertions</li>
        <li>Annotations
            <ul>
                <li>@dataProvider</li>
                <li>@afterClass</li>
                <li>@after</li>
                <li>@depeneds</li>
                <li>@before</li>
                <li>@beforeClass</li>
            </ul>
        </li>
        <li>Fixtures
              <ul>
                  <li>setUp</li>
                  <li>setUpBeforeClass</li>
                  <li>tearDown</li>
                  <li>tearDownAfterClass</li>
              </ul>      
        </li>
        <li>XML configuration
              <ul>
                  <li>logging</li>
                  <li>testsuites</li>
                  <li>includePath</li>
                  <li>directory
                        <ul>
                         <li>exclude</li>                        
                         <li>file</li>                        
                         <li>suffix</li>                        
                        </ul>                  
                  </li>
              </ul>      
        </li>        
        <li>Coverage</li>
    </ul></li>
<li>xDebug (remote),</li>
<li>Linux (used as server),</li>
<li>Windows (used as workspace),</li>
<li>TDD,</li>
</li>
</ul>
<h4>Notes</h4>
<hr/>

<ul>
    <li>@datProvider can't handle namespaced static functions</li>
</ul>

<h4>Example generated coverages</h4>
<hr/>

<img src="https://raw.githubusercontent.com/Volmarg/phpUnit/master/2.png" />
<img src="https://raw.githubusercontent.com/Volmarg/phpUnit/master/1.png" />