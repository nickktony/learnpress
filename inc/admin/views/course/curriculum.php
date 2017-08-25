<?php
/**
 * Template curriculum course.
 *
 * @since 3.0.0
 */

learn_press_admin_view( 'course/sections' );
?>
<script type="text/x-template" id="tmpl-lp-course-curriculum">
    <div id="lp-course-curriculum" class="lp-course-curriculum">
        <div class="heading">
            <h4><?php _e( 'Curriculum', 'learnpress' ); ?> <span class="status" :class="status"></span></h4>

            <span class="collapse-sections"
                  @click="toggle"
                  :class="isOpen ? 'open' : 'close'"></span>
        </div>

        <lp-list-sections></lp-list-sections>
    </div>
</script>

<script>
    (function (Vue, $store) {

        Vue.component('lp-curriculum', {
            template: '#tmpl-lp-course-curriculum',
            computed: {
                status: function () {
                    return $store.getters.status;
                },
                isOpen: function () {
                    return !$store.getters['isHiddenAllSections'];
                }
            },
            methods: {
                toggle: function () {
                    $store.dispatch('toggleAllSections');
                }
            }
        });

    })(Vue, LP_Curriculum_Store);
</script>
