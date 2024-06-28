<div class="sc-bdVaJa bbHbtK"><div class="sc-htpNat gRomhF"><div class="sc-bwzfXH jjWlkx"><button aria-expanded="true" class="css-1xqfpj0" tabindex="0" type="button"><span class="css-18kgcs9"><span role="img" aria-label="collapse" class="css-snhnyn" style="--icon-primary-color: currentColor; --icon-secondary-color: var(--ds-surface, #FFFFFF);"><svg width="24" height="24" viewBox="0 0 24 24" role="presentation"><path d="M8.292 10.293a1.009 1.009 0 000 1.419l2.939 2.965c.218.215.5.322.779.322s.556-.107.769-.322l2.93-2.955a1.01 1.01 0 000-1.419.987.987 0 00-1.406 0l-2.298 2.317-2.307-2.327a.99.99 0 00-1.406 0z" fill="currentColor" fill-rule="evenodd"></path></svg></span></span></button></div><span><span><span class="css-1mxg6en evb0awb1">README.md</span></span></span></div><div class="rah-static rah-static--height-auto panel-content" aria-hidden="false" style="height: auto; overflow: visible;"><div><article data-qa="readme-container" class="css-11mdkte evb0awb0"><div><h1>
Assessment for Senior Laravel Developer
</h1>

<p><br></p>
<p>This assessment is designed to test an examinee’s knowledge of PHP Design principles and its implementations on Laravel framework. It is divided into 3 levels, with each feature having to be accomplished consecutively.</p>
<p><strong>Assessment Point System</strong>: The assessment total is 125 points with additional 32 bonus points.
Passing grade is 100. See breakdown below for more detail.</p>
<table>
<thead>
<tr>
<th>Levels</th>
<th align="right">Points</th>
<th align="right">Bonus</th>
<th align="right">Total</th>
</tr>
</thead>
<tbody>
<tr>
<td>Level 1</td>
<td align="right">50</td>
<td align="right">12</td>
<td align="right">62</td>
</tr>
<tr>
<td>Level 2</td>
<td align="right">45</td>
<td align="right">10</td>
<td align="right">55</td>
</tr>
<tr>
<td>Level 3</td>
<td align="right">30</td>
<td align="right">10</td>
<td align="right">40</td>
</tr>
<tr>
<td>TOTAL</td>
<td align="right">125</td>
<td align="right">32</td>
<td align="right">157</td>
</tr>
</tbody>
</table>
<p><strong>Asessment Duration</strong>: Examinee is given 3 days to complete the assessment. On a separate spreadsheet, please log the time spent per functionality (start time and end time).
For any questions regarding the exam please send inquiry to <a href="mailto:info@sourcecode-ai.com" rel="nofollow">info@sourcecode-ai.com</a> or HR.</p>
<p><strong>Output</strong>: Examinee is expected to send an email with attachment to their output files (preferably a zip file). Alternatively, examinee can attach a link to their GitHub Repository, Google Drive, Dropbox, or any other storage service to download the output if the file is too large to be attached on email, or for other reason.</p>
<p><br></p>
<hr>
<p><br></p>
<p><a name="Level-1"></a></p>
<h3 id="markdown-header-level-1">Level 1</h3>
<h5 id="markdown-header-goals">Goals</h5>
<ul>
<li>[ ] Implement Laravel’s default login feature</li>
<li>[ ] Develop User CRUD functionalities</li>
</ul>
<p><br></p>
<h5 id="markdown-header-prerequisites">Prerequisites</h5>
<p>Base the user migration file in the following table:</p>
<div class="codehilite"><pre><span></span><span class="n">mysql</span><span class="o">&gt;</span> <span class="k">show</span> <span class="n">columns</span> <span class="k">from</span> <span class="n">users</span><span class="p">;</span>
<span class="o">+-------------------+-----------------+------+-----+---------+----------------+</span>
<span class="o">|</span> <span class="n">Field</span>             <span class="o">|</span> <span class="n">Type</span>            <span class="o">|</span> <span class="no">Null</span> <span class="o">|</span> <span class="k">Key</span> <span class="o">|</span> <span class="k">Default</span> <span class="o">|</span> <span class="n">Extra</span>          <span class="o">|</span>
<span class="o">+-------------------+-----------------+------+-----+---------+----------------+</span>
<span class="o">|</span> <span class="n">id</span>                <span class="o">|</span> <span class="kt">bigint</span> <span class="k">unsigned</span> <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span> <span class="n">PRI</span> <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span> <span class="kp">auto_increment</span> <span class="o">|</span>
<span class="o">|</span> <span class="n">prefixname</span>        <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">firstname</span>         <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">middlename</span>        <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">lastname</span>          <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">suffixname</span>        <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">username</span>          <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span> <span class="n">UNI</span> <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">email</span>             <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span> <span class="n">UNI</span> <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">password</span>          <span class="o">|</span> <span class="kt">text</span>            <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">photo</span>             <span class="o">|</span> <span class="kt">text</span>            <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">type</span>              <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span> <span class="n">MUL</span> <span class="o">|</span> <span class="n">user</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">remember_token</span>    <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">100</span><span class="p">)</span>    <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">email_verified_at</span> <span class="o">|</span> <span class="kt">timestamp</span>       <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">created_at</span>        <span class="o">|</span> <span class="kt">timestamp</span>       <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">updated_at</span>        <span class="o">|</span> <span class="kt">timestamp</span>       <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">deleted_at</span>        <span class="o">|</span> <span class="kt">timestamp</span>       <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">+-------------------+-----------------+------+-----+---------+----------------+</span>
</pre></div>
<p><br></p>
<h5 id="markdown-header-instructions">Instructions</h5>
<ol>
<li>Start a project in Laravel 7 or higher</li>
<li>Implement the default login feature using the <a data-is-external-link="true" href="https://packagist.org/packages/laravel/fortify" rel="nofollow">laravel/fortify</a> package.</li>
<li>Add a page to list all users (users.index) in a table.</li>
<li>Add a page to display a single user (users.show).</li>
<li>Add a page to display the form to create a new user (users.create).</li>
<li>Add a page to edit a user (users.edit / users.update).</li>
<li>Add a button to delete a user (users.destroy).</li>
<li>Add a page to list all soft deleted users (users.trashed).</li>
<li>Add a button to restore a soft deleted user (users.restore).</li>
<li>Add a button to permanently delete a soft deleted user (users.delete).</li>
</ol>
<p><br></p>
<h5 id="markdown-header-notes">✎ Notes</h5>
<ul>
<li>All users routes must implement the <code>auth</code> middleware.</li>
<li>The value for <code>prefixname</code> should only be one in <code>[Mr, Mrs, Ms]</code>.</li>
<li>Use <code>enctype=multipart/form-data</code> attribute on the <code>forms</code> to enable uploading of user photo.</li>
</ul>
<p><br></p>
<h5 id="markdown-header-bonus">★ Bonus</h5>
<ul>
<li>
<p><strong>+5 points</strong> - Write and register a route macro for soft deletes, which can be used as:
    </p><div class="codehilite"><pre><span></span><span class="x">Route::softDeletes('users', 'UserController');</span>
</pre></div><p></p>
<p>which contains the following route collection:
</p><div class="codehilite"><pre><span></span><span class="x">Route::get('users/trashed', 'UserController@trashed')-&gt;name('users.trashed');</span>
<span class="x">Route::patch('users/{user}/restore', 'UserController@restore')-&gt;name('users.restore');</span>
<span class="x">Route::delete('users/{user}/delete', 'UserController@delete')-&gt;name('users.delete');</span>
</pre></div><p></p>
</li>
<li>
<p><strong>+2 points</strong> - Implement a model accessor called <code>getAvatarAttribute</code> which can be used as:
    </p><div class="codehilite"><pre><span></span><span class="x">$user = User::find(1);</span>
<span class="x">$user-&gt;avatar;</span>
</pre></div><p></p>
<p>&lt;details&gt;
&lt;summary&gt;which returns the photo or a default image&lt;/summary&gt;</p>
<p></p><div class="codehilite"><pre><span></span><span class="x">/**</span>
<span class="x"> * Retrieve the default photo from storage.</span>
<span class="x"> * Supply a base64 png image if the `photo` column is null.</span>
<span class="x"> *</span>
<span class="x"> * @return string</span>
<span class="x"> */</span>
<span class="x">public function getAvatarAttribute(): string</span>
<span class="x">{</span>
<span class="x">    // Code goes brrrr.</span>
<span class="x">}</span>
</pre></div>
&lt;/details&gt;<p></p>
</li>
<li>
<p><strong>+2 points</strong> - Implement a model accessor called <code>getFullnameAttribute</code> which can be used as:
    </p><div class="codehilite"><pre><span></span><span class="x">$user = User::find(1);</span>
<span class="x">$user-&gt;fullname; // E.g. Juan P. dela Cruz</span>
</pre></div>
    &lt;details&gt;
    &lt;summary&gt;which returns the first, middle initial, and last name of the user&lt;/summary&gt;<p></p>
<p></p><div class="codehilite"><pre><span></span><span class="x">/**</span>
<span class="x"> * Retrieve the user's full name in the format:</span>
<span class="x"> *  [firstname][ mi?][ lastname]</span>
<span class="x"> * Where:</span>
<span class="x"> *  [ mi?] is the optional middle initial.</span>
<span class="x"> *</span>
<span class="x"> * @return string</span>
<span class="x"> */</span>
<span class="x">public function getFullnameAttribute(): string</span>
<span class="x">{</span>
<span class="x">    // Code goes brrrrr.</span>
<span class="x">}</span>
</pre></div>
&lt;/details&gt;<p></p>
</li>
<li>
<p><strong>+2 points</strong> - Implement a model accessor called <code>getMiddleinitialAttribute</code> which can be used as:
    </p><div class="codehilite"><pre><span></span><span class="x">$user = User::find(1);</span>
<span class="x">$user-&gt;middleinitial; // E.g. "delos Santos" -&gt; "D."</span>
</pre></div><p></p>
</li>
<li>
<p><strong>+1 point</strong> - Style the pages using a preferred framework (e.g. bootstrap, vuetify, etc.).</p>
</li>
</ul>
<p><br></p>
<hr>
<p><br></p>
<p><a name="Level-2"></a></p>
<h3 id="markdown-header-level-2">Level 2</h3>
<h5 id="markdown-header-goals_1">Goals</h5>
<ul>
<li>[ ] Implement a Service Pattern for User CRUD</li>
<li>[ ] Write Unit testing for the service class</li>
<li>[ ] Add Validation rules to the User CRUD</li>
</ul>
<p><br></p>
<h5 id="markdown-header-prerequisites_1">Prerequisites</h5>
<ul>
<li><a data-is-external-link="true" href="#Level-1" rel="nofollow">Level 1</a> must be fully accomplished</li>
<li><a data-is-external-link="true" href="https://packagist.org/packages/phpunit/phpunit" rel="nofollow">phpunit/phpunit</a> package must be installed</li>
</ul>
<p><br></p>
<h5 id="markdown-header-instructions_1">Instructions</h5>
<ol>
<li>
<p>Create a unit test file in <code>/tests/Unit/Services/UserServiceTest.php</code>
    &lt;details&gt;
    &lt;summary&gt;Sample UserServiceTest.php&lt;/summary&gt;</p>
<p></p><div class="codehilite"><pre><span></span><span class="x">namespace Tests\Unit\Services;</span>

<span class="x">use Illuminate\Foundation\Testing\DatabaseMigrations;</span>
<span class="x">use Illuminate\Foundation\Testing\RefreshDatabase;</span>
<span class="x">use Illuminate\Foundation\Testing\WithFaker;</span>
<span class="x">use Tests\TestCase;</span>

<span class="x">/**</span>
<span class="x"> * @runTestsInSeparateProcesses</span>
<span class="x"> * @preserveGlobalState disabled</span>
<span class="x"> */</span>
<span class="x">class UserServiceTest extends TestCase</span>
<span class="x">{</span>
<span class="x">    use DatabaseMigrations, RefreshDatabase, WithFaker;</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_return_a_paginated_list_of_users()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_store_a_user_to_database()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_find_and_return_an_existing_user()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_update_an_existing_user()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_soft_delete_an_existing_user()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_return_a_paginated_list_of_trashed_users()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_restore_a_soft_deleted_user()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_permanently_delete_a_soft_deleted_user()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * @test</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function it_can_upload_photo()</span>
<span class="x">    {</span>
<span class="x">    // Arrangements</span>

<span class="x">    // Actions</span>

<span class="x">    // Assertions</span>
<span class="x">    }</span>
<span class="x">}</span>
</pre></div>
&lt;/details&gt;
1. Create a file <code>/app/Services/UserService.php</code>
&lt;details&gt;
&lt;summary&gt;Sample UserService.php&lt;/summary&gt;<p></p>
<p></p><div class="codehilite"><pre><span></span><span class="x">namespace User\Services;</span>

<span class="x">use App\User;</span>
<span class="x">use Illuminate\Http\Request;</span>
<span class="x">use Illuminate\Http\UploadedFile;</span>
<span class="x">use Illuminate\Pagination\LengthAwarePaginator;</span>

<span class="x">class UserService implements UserServiceInterface</span>
<span class="x">{</span>
<span class="x">    /**</span>
<span class="x">     * The model instance.</span>
<span class="x">     *</span>
<span class="x">     * @var App\User</span>
<span class="x">     */</span>
<span class="x">    protected $model;</span>

<span class="x">    /**</span>
<span class="x">     * The request instance.</span>
<span class="x">     *</span>
<span class="x">     * @var \Illuminate\Http\Request</span>
<span class="x">     */</span>
<span class="x">    protected $request;</span>

<span class="x">    /**</span>
<span class="x">     * Constructor to bind model to a repository.</span>
<span class="x">     *</span>
<span class="x">     * @param \App\User                $model</span>
<span class="x">     * @param \Illuminate\Http\Request $request</span>
<span class="x">     */</span>
<span class="x">    public function __construct(User $model, Request $request)</span>
<span class="x">    {</span>
<span class="x">        $this-&gt;model = $model;</span>
<span class="x">        $this-&gt;request = $request;</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Define the validation rules for the model.</span>
<span class="x">     *</span>
<span class="x">     * @param  int $id</span>
<span class="x">     * @return array</span>
<span class="x">     */</span>
<span class="x">    public function rules($id = null)</span>
<span class="x">    {</span>
<span class="x">        return [</span>
<span class="x">            /**</span>
<span class="x">             * Rule syntax:</span>
<span class="x">             *  'column' =&gt; 'validation1|validation2'</span>
<span class="x">             *</span>
<span class="x">             *  or</span>
<span class="x">             *</span>
<span class="x">             *  'column' =&gt; ['validation1', function1()]</span>
<span class="x">             */</span>
<span class="x">            'firstname' =&gt; 'required',</span>
<span class="x">        ];</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Retrieve all resources and paginate.</span>
<span class="x">     *</span>
<span class="x">     * @return \Illuminate\Pagination\LengthAwarePaginator</span>
<span class="x">     */</span>
<span class="x">    public function list()</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Create model resource.</span>
<span class="x">     *</span>
<span class="x">     * @param  array $attributes</span>
<span class="x">     * @return \Illuminate\Database\Eloquent\Model</span>
<span class="x">     */</span>
<span class="x">    public function store(array $attributes)</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Retrieve model resource details.</span>
<span class="x">     * Abort to 404 if not found.</span>
<span class="x">     *</span>
<span class="x">     * @param  integer $id</span>
<span class="x">     * @return \Illuminate\Database\Eloquent\Model|null</span>
<span class="x">     */</span>
<span class="x">    public function find(int $id):? Model</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Update model resource.</span>
<span class="x">     *</span>
<span class="x">     * @param  integer $id</span>
<span class="x">     * @param  array   $attributes</span>
<span class="x">     * @return boolean</span>
<span class="x">     */</span>
<span class="x">    public function update(int $id, array $attributes): bool</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Soft delete model resource.</span>
<span class="x">     *</span>
<span class="x">     * @param  integer|array $id</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function destroy($id)</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Include only soft deleted records in the results.</span>
<span class="x">     *</span>
<span class="x">     * @return \Illuminate\Pagination\LengthAwarePaginator</span>
<span class="x">     */</span>
<span class="x">    public function listTrashed()</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Restore model resource.</span>
<span class="x">     *</span>
<span class="x">     * @param  integer|array $id</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function restore($id)</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Permanently delete model resource.</span>
<span class="x">     *</span>
<span class="x">     * @param  integer|array $id</span>
<span class="x">     * @return void</span>
<span class="x">     */</span>
<span class="x">    public function delete($id)</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Generate random hash key.</span>
<span class="x">     *</span>
<span class="x">     * @param  string $key</span>
<span class="x">     * @return string</span>
<span class="x">     */</span>
<span class="x">    public function hash(string $key): string</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Upload the given file.</span>
<span class="x">     *</span>
<span class="x">     * @param  \Illuminate\Http\UploadedFile $file</span>
<span class="x">     * @return string|null</span>
<span class="x">     */</span>
<span class="x">    public function upload(UploadedFile $file)</span>
<span class="x">    {</span>
<span class="x">        // Code goes brrrr.</span>
<span class="x">    }</span>
<span class="x">}</span>
</pre></div>
&lt;/details&gt;
1. Create an Interface class file <code>/app/Services/UserServiceInterface.php</code>
1. The Interface must have a public method called <code>hash(string $password): string</code>, which should be used when saving the password field.
    &lt;details&gt;
    &lt;summary&gt;See Sample file&lt;/summary&gt;<p></p>
<div class="codehilite"><pre><span></span><code><span>```</span><span class="n">php</span><span class="w"></span>

<span class="n">namespace</span><span class="w"> </span><span class="n">App</span><span>\</span><span class="n">Services</span><span class="p">;</span><span class="w"></span>

<span class="n">interface</span><span class="w"> </span><span class="n">UserServiceInterface</span><span class="w"></span>
<span>{</span><span class="w"></span>
<span class="w">    </span><span class="cm">/**</span>
<span class="cm">     * Generate random hash key.</span>
<span class="cm">     *</span>
<span class="cm">     * @param  string $key</span>
<span class="cm">     * @return string</span>
<span class="cm">     */</span><span class="w"></span>
<span class="w">    </span><span class="k">public</span><span class="w"> </span><span class="k">function</span><span class="w"> </span><span class="n">hash</span><span class="p">(</span><span class="n">string</span><span class="w"> </span><span>$</span><span class="k">key</span><span class="p">);</span><span class="w"></span>
<span>}</span><span class="w"></span>
<span>```</span><span class="w"></span>
<span class="o">&lt;/</span><span class="n">details</span><span class="o">&gt;</span><span class="w"></span>
</code></pre></div>

<ol>
<li>Build your test cases. See the following test cases for the minimum coverage requirements:
<code>+-------------------------------------------------+---------------------------------------------------------+------------------------------------------------------------------------------------+
| Unit Test                                       | Coverage                                                | Remarks                                                                            |
+-------------------------------------------------+---------------------------------------------------------+------------------------------------------------------------------------------------+
| it_can_return_a_paginated_list_of_users         | UserService@list                                        | Must implement and return the \Illuminate\Pagination\LengthAwarePaginator instance |
| it_can_store_a_user_to_database                 | UserService@store(array $attributes)                    |                                                                                    |
| it_can_find_and_return_an_existing_user         | UserService@find(int $id)                               | Must use the findOrFail method of the User model.                                  |
| it_can_update_an_existing_user                  | UserService@update(int $id, array $attributes)          |                                                                                    |
| it_can_soft_delete_an_existing_user             | UserService@destroy(int $id)                            |                                                                                    |
| it_can_return_a_paginated_list_of_trashed_users | UserService@listTrashed                                 |                                                                                    |
| it_can_restore_a_soft_deleted_user              | UserService@restore(int $id)                            |                                                                                    |
| it_can_permanently_delete_a_soft_deleted_user   | UserService@delete(int $id)                             |                                                                                    |
| it_can_upload_photo                             | UserService@upload(\Illuminate\Http\UploadedFile $file) |                                                                                    |
+-------------------------------------------------+---------------------------------------------------------+------------------------------------------------------------------------------------+</code></li>
<li>If all test passed, inject the <code>UserService</code> instance to the <code>UserController@__construct</code> method.</li>
<li>Use the <code>UserService</code>'s methods inside <code>UserController</code> accordingly.</li>
<li>Add validation rules to the <code>UserService@rules</code>.</li>
<li>Create a <code>Request</code> class file <code>/app/Http/Requests/UserRequest.php</code>, and add the rules.
&lt;details&gt;
&lt;summary&gt;See sample <code>UserRequest.php</code>&lt;/summary&gt;</li>
</ol>
<p></p><div class="codehilite"><pre><span></span><span class="x">namespace App\Http\Requests;</span>

<span class="x">use Illuminate\Foundation\Http\FormRequest;</span>
<span class="x">use App\Services\UserServiceInterface;</span>

<span class="x">class UserRequest extends FormRequest</span>
<span class="x">{</span>
<span class="x">    /**</span>
<span class="x">     * Determine if the user is authorized</span>
<span class="x">     * to make this request.</span>
<span class="x">     *</span>
<span class="x">     * @return boolean</span>
<span class="x">     */</span>
<span class="x">    public function authorize()</span>
<span class="x">    {</span>
<span class="x">    return true;</span>
<span class="x">    }</span>

<span class="x">    /**</span>
<span class="x">     * Get the validation rules that apply to the request.</span>
<span class="x">     *</span>
<span class="x">     * @return array</span>
<span class="x">     */</span>
<span class="x">    public function rules()</span>
<span class="x">    {</span>
<span class="x">    return $this-&gt;container-&gt;make(</span>
<span class="x">        UserServiceInterface::class</span>
<span class="x">    )-&gt;rules($this-&gt;user);</span>
<span class="x">    }</span>
<span class="x">}</span>
</pre></div>
&lt;/details&gt;
1. Use the <code>UserRequest</code> class as the first parameter to <code>UserController@store</code> and <code>UserController@update</code>.
<div class="codehilite"><pre><span></span><span class="x">public function store(UserRequest $request) { ... }</span>

<span class="x">public function update(UserRequest $request, int $id) { ... }</span>
</pre></div><p></p>
</li>
</ol>
<p><br></p>
<h5 id="markdown-header-notes_1">✎ Notes</h5>
<ul>
<li>You may add more test cases to cover more methods if desired.</li>
<li>If a method name is not to your liking, you may change it thus.</li>
<li>Use your best judgment in declaring the validation rules for the fields.</li>
<li>
<p>Do not forget to register the bindings for <code>UserService</code> and <code>UserServiceInterface</code> in the <code>AppServiceProvider</code>.
    &lt;details&gt;
    &lt;summary&gt;See sample binding code&lt;/summary&gt;</p>
<p></p><div class="codehilite"><pre><span></span><span class="x">/**</span>
<span class="x"> * Register any application services.</span>
<span class="x"> *</span>
<span class="x"> * @return void</span>
<span class="x"> */</span>
<span class="x">public function register()</span>
<span class="x">{</span>
<span class="x">    $this-&gt;app-&gt;bind(UserServiceInterface::class, UserService::class);</span>
<span class="x">}</span>
</pre></div>
&lt;/details&gt;<p></p>
</li>
</ul>
<p><br></p>
<h5 id="markdown-header-bonus_1">★ Bonus</h5>
<ul>
<li><strong>+5 points</strong> - Write a <strong>Feature test</strong> covering the <code>UserController</code> functionalities</li>
<li><strong>+5 points</strong> - Write a <strong>Unit test</strong> covering the <code>&lt;timestamp&gt;_create_users_table</code> migration columns.</li>
</ul>
<p><br></p>
<hr>
<p><br></p>
<p><a name="Level-3"></a></p>
<h3 id="markdown-header-level-3">Level 3</h3>
<h5 id="markdown-header-goals_2">Goals</h5>
<ul>
<li>[ ] Generate a table called <code>details</code> to save additional user background information</li>
<li>[ ] Implement an event called <code>UserSaved</code> triggered when a user is created or updated</li>
<li>[ ] Implement a listener that auto-saves additional user details when the <code>UserSaved</code> event is triggered</li>
</ul>
<p><br></p>
<h5 id="markdown-header-prerequisites_2">Prerequisites</h5>
<ul>
<li><a data-is-external-link="true" href="#Level-2" rel="nofollow">Level 2</a> must be fully accomplished</li>
</ul>
<p><br></p>
<h5 id="markdown-header-instructions_2">Instructions</h5>
<ol>
<li>Create a migration file for a table called <code>details</code>. Use the following table for reference on the columns:
    <div class="codehilite"><pre><span></span><span class="n">mysql</span><span class="o">&gt;</span> <span class="k">show</span> <span class="n">columns</span> <span class="k">from</span> <span class="n">details</span><span class="p">;</span>
<span class="o">+------------+-----------------+------+-----+---------+----------------+</span>
<span class="o">|</span> <span class="n">Field</span>      <span class="o">|</span> <span class="n">Type</span>            <span class="o">|</span> <span class="no">Null</span> <span class="o">|</span> <span class="k">Key</span> <span class="o">|</span> <span class="k">Default</span> <span class="o">|</span> <span class="n">Extra</span>          <span class="o">|</span>
<span class="o">+------------+-----------------+------+-----+---------+----------------+</span>
<span class="o">|</span> <span class="n">id</span>         <span class="o">|</span> <span class="kt">bigint</span> <span class="k">unsigned</span> <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span> <span class="n">PRI</span> <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span> <span class="kp">auto_increment</span> <span class="o">|</span>
<span class="o">|</span> <span class="k">key</span>        <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span> <span class="n">MUL</span> <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">value</span>      <span class="o">|</span> <span class="kt">text</span>            <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">icon</span>       <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">status</span>     <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">NO</span>   <span class="o">|</span>     <span class="o">|</span> <span class="mi">1</span>       <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">type</span>       <span class="o">|</span> <span class="kt">varchar</span><span class="p">(</span><span class="mi">255</span><span class="p">)</span>    <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="n">detail</span>  <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">user_id</span>    <span class="o">|</span> <span class="kt">bigint</span> <span class="k">unsigned</span> <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span> <span class="n">MUL</span> <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">created_at</span> <span class="o">|</span> <span class="kt">timestamp</span>       <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">|</span> <span class="n">updated_at</span> <span class="o">|</span> <span class="kt">timestamp</span>       <span class="o">|</span> <span class="n">YES</span>  <span class="o">|</span>     <span class="o">|</span> <span class="no">NULL</span>    <span class="o">|</span>                <span class="o">|</span>
<span class="o">+------------+-----------------+------+-----+---------+----------------+</span>
</pre></div></li>
<li>Generate an Eloquent Model file <code>app/Detail.php</code>.</li>
<li>Assign a one-to-many relationship between <code>App\User</code> model and <code>App\Detail</code> model.</li>
<li>Create an Event class <code>app/Events/UserSaved</code>.</li>
<li>Map the <code>UserSaved</code> Event class on <code>App\User</code> Eloquent Model's <code>saved</code> event.</li>
<li>Create a Listener class <code>app/Listeners/SaveUserBackgroundInformation.php</code>.<ol>
<li>Inject the <code>UserService</code> class on <code>SaveUserBackgroundInformation@__construct</code>.<ol>
<li>Add a method in the <code>UserService</code> class to handle saving of user details.</li>
</ol>
</li>
<li>
<p>The listener should save to a table called <code>details</code> the following information:</p>
<ol>
<li>The user's full name based on <code>firstname</code>, <code>middlename</code>, and <code>lastname</code>.</li>
<li>The user's middle initial based on abbreviating the <code>middlename</code>.</li>
<li>The user's avatar based on a given <code>photo</code></li>
<li>The user's gender based on the value of <code>prefixname</code>.
&lt;details&gt;
&lt;summary&gt;Example data:&lt;/summary&gt;</li>
</ol>
<div class="codehilite"><pre><span></span><span class="x">for a user with attributes of:</span>
<span class="x">{</span>
<span class="x">    id: 1,</span>
<span class="x">    prefixname: 'Mr.',</span>
<span class="x">    firstname: 'Juan',</span>
<span class="x">    middlename: 'Palito',</span>
<span class="x">    lastname: 'dela Cruz',</span>
<span class="x">    suffixname: 'Jr.',</span>
<span class="x">    username: 'juantwothree',</span>
<span class="x">    email: 'juan@demo.ph',</span>
<span class="x">    photo: null,</span>
<span class="x">    type: 'user',</span>
<span class="x">}</span>
</pre></div>
<p>The saved data should be:</p>
<p></p><div class="codehilite"><pre><span></span><span class="n">mysql</span><span class="o">&gt;</span> <span class="k">select</span> <span class="ss">`id`</span><span class="p">,</span><span class="ss">`key`</span><span class="p">,</span><span class="ss">`value`</span><span class="p">,</span><span class="ss">`type`</span><span class="p">,</span><span class="ss">`user_id`</span> <span class="k">from</span> <span class="n">details</span><span class="p">;</span>
<span class="o">+----+-----------------+-------------------+--------+---------+</span>
<span class="o">|</span> <span class="n">id</span> <span class="o">|</span> <span class="k">key</span>             <span class="o">|</span> <span class="n">value</span>             <span class="o">|</span> <span class="n">type</span>   <span class="o">|</span> <span class="n">user_id</span> <span class="o">|</span>
<span class="o">+----+-----------------+-------------------+--------+---------+</span>
<span class="o">|</span>  <span class="mi">1</span> <span class="o">|</span> <span class="n">Full</span> <span class="n">name</span>       <span class="o">|</span> <span class="n">Juan</span> <span class="n">P</span><span class="p">.</span> <span class="n">dela</span> <span class="n">Cruz</span> <span class="o">|</span> <span class="n">bio</span>    <span class="o">|</span>       <span class="mi">1</span> <span class="o">|</span>
<span class="o">|</span>  <span class="mi">2</span> <span class="o">|</span> <span class="n">Middle</span> <span class="n">Initial</span>  <span class="o">|</span> <span class="n">P</span><span class="p">.</span>                <span class="o">|</span> <span class="n">bio</span>    <span class="o">|</span>       <span class="mi">1</span> <span class="o">|</span>
<span class="o">|</span>  <span class="mi">3</span> <span class="o">|</span> <span class="n">Avatar</span>          <span class="o">|</span> <span class="n">http</span><span class="p">:</span><span class="o">//</span><span class="n">localho</span><span class="p">...</span> <span class="o">|</span> <span class="n">bio</span>    <span class="o">|</span>       <span class="mi">1</span> <span class="o">|</span>
<span class="o">|</span>  <span class="mi">4</span> <span class="o">|</span> <span class="n">Gender</span>          <span class="o">|</span> <span class="n">Male</span>              <span class="o">|</span> <span class="n">bio</span>    <span class="o">|</span>       <span class="mi">1</span> <span class="o">|</span>
<span class="o">+----+-----------------+-------------------+--------+---------+</span>
</pre></div>
&lt;/details&gt;<p></p>
</li>
</ol>
</li>
</ol>
<p><br></p>
<h5 id="markdown-header-notes_2">✎ Notes</h5>
<ul>
<li>The column <code>details.user_id</code> must be a foreign key that references <code>users.id</code> and cascades on <code>DELETE</code> and <code>UPDATE</code></li>
</ul>
<p><br></p>
<h5 id="markdown-header-bonus_2">★ Bonus</h5>
<ul>
<li><strong>+5 points</strong> - Write a <strong>Unit test</strong> covering the event listener's functionalities</li>
<li><strong>+5 points</strong> - Write a <strong>Feature test</strong> covering the event and event listener's functionalities</li>
</ul>
<p><br></p>
<hr>
<p><br></p>
<p>
 Good luck!
</p></div></article></div></div></div>
