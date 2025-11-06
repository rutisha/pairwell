<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.11.12' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.11.6' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_WEBSITE_BASE_URL', 'https://wpastra.com' );

/**
 * Deprecate constants in future versions as they are no longer used in the codebase.
 */
define( 'ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'dashboard', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( '/pricing/', 'free-theme', 'customizer', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/dark-mode.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-memory-limit-notice.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-elementor-editor-settings.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

// === Student Wellness Dashboard Shortcode ===
function student_dashboard_section() {
      if ( !is_user_logged_in() ) {
        // If user not logged in — show nothing
        return '';
    }


    $user_id = get_current_user_id();
    $mood = get_user_meta($user_id, 'mood', true);
    $stress_level = get_user_meta($user_id, 'stress_level', true);
    $goal = get_user_meta($user_id, 'goal', true);
    $completed_tasks = get_user_meta($user_id, 'completed_tasks', true) ?: [];

    if (!$stress_level) $stress_level = rand(3, 9);
    $percent = ($stress_level / 10) * 100;

    // Dynamic To-Do Suggestions
    $todo = [];
    if ($mood === 'Happy') {
        $todo = ['Share positive thoughts', 'Help a peer', 'Take a gratitude break'];
    } elseif ($mood === 'Neutral') {
        $todo = ['Short walk outdoors', 'Watch a motivational video', 'Reflect on your goals'];
    } elseif ($mood === 'Stressed' || $stress_level > 6) {
        $todo = ['5-min deep breathing', 'Write down what’s bothering you', 'Try mindfulness audio'];
    } else {
        $todo = ['Stay consistent with your habits', 'Track your progress', 'Spend time offline'];
    }

    // 🔹 Emoji based on mood or stress level
    if ($mood === 'Happy') $emoji = '😊';
    elseif ($mood === 'Neutral') $emoji = '😐';
    elseif ($mood === 'Stressed' || $stress_level > 7) $emoji = '😫';
    else $emoji = '🙂';

    ob_start(); ?>

    <!-- 🌟 Styles -->
    <style>
    #student-dashboard {
        margin: 60px 29px 93px 35px;
    }
    .popup-bg {
        display:none;position:fixed;top:0;left:0;width:100%;height:100%;
        background:rgba(0,0,0,0.6);justify-content:center;align-items:center;z-index:9999;
    }
    .popup {
        background:#fff;padding:25px;border-radius:15px;width:400px;
        box-shadow:0 4px 10px rgba(0,0,0,0.2);
    }
    .popup h3 {color:#BA0C2F;text-align:center;}
    .popup label {display:block;margin:10px 0 5px;font-weight:600;}
    .popup input, .popup select {
        width:100%;padding:8px;border-radius:6px;border:1px solid #ccc;
    }
    .popup button {
        margin-top:15px;background:#BA0C2F;color:#fff;border:none;
        padding:10px 15px;border-radius:8px;cursor:pointer;width:100%;
    }
    .dashboard {
        display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:25px;margin:40px 0;
    }
    .dashboard .card {
        background:#fff;border-radius:15px;padding:25px;
        box-shadow:0 4px 10px rgba(0,0,0,0.1);transition:transform 0.2s;
    }
    .dashboard .card:hover {transform:translateY(-5px);}
    .dashboard .card h3 {
        color:#BA0C2F;font-size:20px;font-weight:700;margin-bottom:10px;
        border-bottom:2px solid #BA0C2F;padding-bottom:5px;
    }
    .dashboard ul {list-style:none;padding:0;margin:0;}
    .dashboard ul li {
        background:#f9f9f9;padding:10px 14px;margin-bottom:8px;border-radius:8px;
        cursor:pointer;display:flex;align-items:center;justify-content:space-between;
        font-weight:500;
        transition:background 0.2s ease;
    }
    .dashboard ul li:hover {background:#f1f1f1;}
    .dashboard ul li.done {
        background:#BA0C2F;color:#fff;
    }
    .dashboard ul li .checkmark {
    width: 20px; height: 20px; padding: 3px; border-radius: 50%;  display: flex; align-items: center;justify-content: center;
    font-size: 14px; transition: all 0.3se ease;
  }
    .dashboard ul li.done .checkmark {
        color:white;content:'✔';
    }
    .dashboard .value { font-size: 28px; font-weight: bold; color: #333; margin: 8px 0; } 
    .dashboard .progress-bar { background: #eee; border-radius: 10px; height: 10px; width: 100%; } 
    .dashboard .progress { background: #BA0C2F; height: 10px; border-radius: 10px; }
    .emoji-display {font-size: 40px; }
    </style>

    <!-- 🌟 Popup -->
    <div class="popup-bg" id="wellnessPopup">
      <div class="popup">
        <h3>Tell us how you're feeling today 😊</h3>
        <label for="mood">Mood</label>
        <select id="mood">
          <option value="">Select...</option>
          <option value="Happy">Happy</option>
          <option value="Neutral">Neutral</option>
          <option value="Stressed">Stressed</option>
        </select>

        <label for="stress">Stress Level (1–10)</label>
        <input type="number" id="stress" min="1" max="10" value="5">

        <label for="goal">Today's Goal</label>
        <input type="text" id="goal" placeholder="e.g., Stay calm during study">

        <button id="saveWellness">Save</button>
      </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const popupBg = document.getElementById('wellnessPopup');
      const saveBtn = document.getElementById('saveWellness');
      const hasData = <?php echo $mood ? 'true' : 'false'; ?>;

      // 🔹 Show popup if 4 hours passed or no data yet
      const lastPopup = localStorage.getItem('lastPopupTime');
      const now = new Date().getTime();
      const fourHours = 4 * 60 * 60 * 1000;
      if (!hasData || !lastPopup || now - lastPopup > fourHours) {
        popupBg.style.display = 'flex';
      }

      saveBtn.addEventListener('click', function() {
        const mood = document.getElementById('mood').value;
        const stress = document.getElementById('stress').value;
        const goal = document.getElementById('goal').value;
        if (!mood || !stress || !goal) { alert('Please fill all fields'); return; }

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
          method: 'POST',
          headers: {'Content-Type': 'application/x-www-form-urlencoded'},
          body: new URLSearchParams({ action: 'save_user_wellness', mood, stress, goal })
        }).then(res => res.text()).then(() => {
          localStorage.setItem('lastPopupTime', new Date().getTime());
          popupBg.style.display = 'none';
          location.reload();
        });
      });

      // ✅ To-do item click
      document.querySelectorAll('.todo-item').forEach(item => {
        item.addEventListener('click', function() {
          const check = this.querySelector('.checkmark');
          this.classList.toggle('done');
          check.textContent = this.classList.contains('done') ? '✔' : '';
          const task = this.dataset.task;
          const done = this.classList.contains('done') ? 1 : 0;
          fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: new URLSearchParams({ action: 'toggle_task', task, done })
          });
        });
      });
    });
    </script>

    <section id="student-dashboard">
      <h2 style="text-align:center;color:#BA0C2F;font-weight:700;">Your Personalized Wellness Dashboard</h2>

      <div class="dashboard">
        <div class="card">
          <h3>Helpful Tips</h3>
          <p>
            <?php
              if ($stress_level > 7) echo "You're feeling quite stressed — take small breaks and breathe deeply.";
              elseif ($mood === 'Happy') echo "Keep spreading positivity and focus on your goals!";
              elseif ($mood === 'Neutral') echo "You’re in balance — a perfect time to make steady progress.";
              else echo "Keep tracking how you feel daily — small steps count!";
            ?>
          </p>
        </div>

        <div class="card">
          <h3>Your To-Do for Today</h3>
          <ul>
            <?php foreach ($todo as $task): 
              $done = in_array($task, $completed_tasks); ?>
              <li class="todo-item <?php echo $done ? 'done' : ''; ?>" data-task="<?php echo esc_attr($task); ?>">
                <?php echo esc_html($task); ?>
                <span class="checkmark"><?php echo $done ? '✔' : ''; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="card">
          <h3>Stress Level</h3>
          <div class="emoji-display"><?php echo $emoji; ?></div>
          <div class="value"><?php echo $stress_level; ?> / 10</div>
          <div class="progress-bar"><div class="progress" style="width:<?php echo $percent; ?>%;"></div></div>
          <p style="margin-top:10px;">
            <?php 
              if ($stress_level > 7) echo " High stress — focus on relaxation.";
              elseif ($stress_level > 4) echo "Moderate stress — balance it with rest.";
              else echo " Low stress — you're doing great!";
            ?>
          </p>
        </div>

        <div class="card">
          <h3>Motivational Reads</h3>
          <ul>
            <?php
              $posts = get_posts(['numberposts' => 3, 'category_name' => 'motivation']);
              if ($posts) {
                foreach ($posts as $p) {
                  echo '<li><a href="'.get_permalink($p).'">'.esc_html($p->post_title).'</a></li>';
                }
              } else {
                echo '<li>Keep going — progress takes time!</li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </section>

    <?php
    return ob_get_clean();
}
add_shortcode('student_dashboard', 'student_dashboard_section');

// 🧠 Save user wellness data
add_action('wp_ajax_save_user_wellness', function() {
    $user_id = get_current_user_id();
    if (!$user_id) wp_die('Not logged in');
    update_user_meta($user_id, 'mood', sanitize_text_field($_POST['mood']));
    update_user_meta($user_id, 'stress_level', intval($_POST['stress']));
    update_user_meta($user_id, 'goal', sanitize_text_field($_POST['goal']));
    wp_die('Saved');
});

// ✅ Mark to-do tasks done/undone
add_action('wp_ajax_toggle_task', function() {
    $user_id = get_current_user_id();
    if (!$user_id) wp_die('Not logged in');
    $task = sanitize_text_field($_POST['task']);
    $done = intval($_POST['done']);
    $tasks = get_user_meta($user_id, 'completed_tasks', true) ?: [];
    if ($done && !in_array($task, $tasks)) $tasks[] = $task;
    if (!$done && in_array($task, $tasks)) $tasks = array_diff($tasks, [$task]);
    update_user_meta($user_id, 'completed_tasks', $tasks);
    wp_die('ok');
});
