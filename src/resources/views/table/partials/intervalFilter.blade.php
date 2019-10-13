<pre class="is-paddingless"
    v-hljs>
    <code class="js">
interval-filter class="box"
    label="Salary"
    type="number"
    @update="
        intervals.examples.hired_at.min = $event.min;
        intervals.examples.hired_at.max = $event.max;
    "
interval-filter
    </code>
</pre>