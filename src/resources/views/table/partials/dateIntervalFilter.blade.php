<pre class="is-paddingless"
    v-hljs>
    <code class="js">
date-interval-filter class="box"
    label="Hired Between"
    @update="
        intervals.examples.hired_at.min = $event.min;
        intervals.examples.hired_at.max = $event.max;
    "
date-interval-filter
    </code>
</pre>