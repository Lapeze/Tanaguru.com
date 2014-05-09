<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

</div><!-- #main -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="widget-area">
        <aside id="footer-tg-logo" class="widget">
            <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/Images/tg-logo-footer.png" alt=""/>
                Tanaguru</p>
        </aside>
        <aside id="footer-tg" class="widget">
            <h2>Tanaguru</h2>
            <ul>
<!--                <li>
                    <a href="" title="<?php _e('Technology link title', 'wwwtg'); ?>"><?php _e('Technology link text', 'wwwtg'); ?></a>
                </li>
                <li>
                    <a href="" title="<?php _e('Tour link title', 'wwwtg'); ?>"><?php _e('Tour link text', 'wwwtg'); ?></a>
                </li>
                <li>
                    <a href="" title="<?php _e('Offer link title', 'wwwtg'); ?>"><?php _e('Offer link text', 'wwwtg'); ?></a>
                </li>-->
                <li>
                    <a href="<?php _e('Contact link', 'wwwtg'); ?>">Contact</a>
                </li>
                <li>
                    <a href="http://blog.tanaguru.com/">Blog</a>
                </li>
            </ul>
        </aside>
        <aside id="footer-and-also" class="widget">
            <h2><?php _e('And also', 'wwwtg'); ?></h2>
            <ul>
                <li>
                    <a href="<?php _e('Contrast-Finder URL', 'wwwtg'); ?>" title="<?php _e('Contrast-Finder link title', 'wwwtg'); ?>">Contrast-Finder</a>
                </li>
                <li>
                    <a href="<?php _e('KBAccess URL', 'wwwtg'); ?>" title="<?php _e('KBAccess link title', 'wwwtg'); ?>">KBAccess</a>
                </li>
                <li>
                    <a href="<?php _e('Observatory URL', 'wwwtg'); ?>"><?php _e('Observatory link text', 'wwwtg'); ?></a>
                </li>
                <li>
                    <a href="<?php _e('Open-S URL', 'wwwtg'); ?>">Open-S</a>
                </li>
            </ul>
        </aside>
        <aside  id="footer-social" class="widget">
            <h2 class="screen-reader-text"><?php _e('Social Tanaguru', 'wwwtg'); ?></h2>
            <p>
                <a href="<?php _e('Twitter link', 'wwwtg'); ?>" title="<?php _e('Twitter link title', 'wwwtg'); ?>">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAyCAMAAAAtFKi+AAACOlBMVEUAAAD///8Ch6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeECh6orqeEMkLgopt0Ch6orqeECh6oCh6orqeErqeECh6orqeECh6oWmMUoptwrqeECh6orqeECh6orqeEIjLMrqeECh6orqeEdnc4pqN8Ch6orqeECh6oCh6sDiKsEia0Hi7EKjbQKjrUPkbsPkrsSlL8SlcATlcEUlsMVl8QYmccZmskdnc4dns4fn9EhodQiodUjotYjo9cmpdonptsnptwopt0op90pp94qqOArqeEsqeEtquEuquEwq+Ixq+IzrOI2reM4ruM5r+M6r+M8sONAseRBsuRDs+RGtOVHtOVLtuVQuOZRueZTuedVuudWu+dZvOdevuhgv+llwelnwelpwuprw+psw+puxOpvxetyxutzxut2x+x3yOx5yex7yex8yu2BzO2Fze6Gzu6L0O+O0e+T0/CW1fCc1/Gf2PGk2vKn2/Ov3/S04fS14fW24fW54/W95Pa/5fbA5fbE5/fF5/fM6vjS7fnV7vna8Prb8Pre8vrg8/vh8/vi8/vj9Pvk9Pvo9vzq9/zv+f3w+f3y+v30+/32+/73/P74/P75/f77/f79/v/+//////9yfo2yAAAASnRSTlMAAAEBAwMGBhMTHR0iIiQkMDA6Oj09RkZHR1RUZGR/f4GBjIyYmJycnp6goKmpsLC9vcLCxsfHyNzc5+fn5+jo8vLz8/X1+vr+/rd4J0UAAAKOSURBVHjalc71X1NRGMfxR6S7u7vToDvGgcGIAZPOPQ5sQUFFERVRxEDExsaaAVLC+d8cY9x7z3bH5vu3z+v1fe49YMAlKCYjrwyxLC8jJsgFTHAKy0JGVpgTGOeWVIkGKpPcQJxdFD9nT6LsQIRPARpV4AP6DobgvkIOAsMqDk2Is2K+n4AmJQj/EYFmiABOAJolAHQcitAsRQ6wKwXNlAJafmjEiUtXzyLDD3Yc5foMCpx6tkbp1ocxVN2eQZ0joOHBTQbVE8gff6Zaa4srK+dxjwcAxHA1TjducfGK7lm++/AC6sQA2JRwmxuUbi8ModbwNnewRee5SYkNeCFnjGqop1WoMUX5gznkeUEIH8fV2sHPJ1dUeIdy3qJACKTxwa/Wlz5RziIKpEEuH9cev6YinqNALlTwMU5FPUKBChCESk3FjKMQCGNyixr6rWIPlMKaXqUGFlBICf3CvDi7RPVsjqBQP3QKc3iD6nuKjE4oZ3qW6vl+EhnlkIOMqV/Mfv0ysnIgFVmD179Rzt+bqCcVgntQaOjeV8pZnkA9PcHg2bIX52YezL/5Q3nvR1BfiydYF3M1+nKT8j5OoqFia4DoVr5P33/xZVXz9B/v5kZRxLFoAHCvRdbgEBpT6w4ahxVoJsUh2OEr7UazdEt9QStZpkQzKGXJsMu+sAHN0FBoDzr+pAlNaiL+wAkncjRBTsKBZxFP6gdwHwP1JN4CBCxjSU0HGtVRQ2ItgWERTEhjH4rqayQk2AL0eecTaXMvGuhtlpJ8bxBhGykh1XWtA8zbW+uqiSTSFsS5JkoIqZLJFW3tXV3tbQq5rIoQSaIrGOcYmkkYmaGOYIJzYHR6dikhpdnp0YHOYODAf/oHDQ5ZcN++8wAAAAAASUVORK5CYII="
                         alt="<?php _e('Tanaguru on Twitter', 'wwwtg'); ?>" />
                </a>
                <a href="<?php _e('Github link', 'wwwtg'); ?>" title="<?php _e('Github link title', 'wwwtg'); ?>">
                    <img src="data:image/png;base64,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"" 
                         alt="<?php _e('Tanaguru on Github', 'wwwtg'); ?>" />
                </a> 
                <a href="<?php _e('Linkedin link', 'wwwtg'); ?>" title="<?php _e('Linkedin link title', 'wwwtg'); ?>">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAyCAMAAAAtFKi+AAAB9VBMVEUAAAD///8BZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZpkCS2gBZJUCUnQBZpkCS2gBZpkCS2gBZpkBZpkCS2gBZJUBZpkCS2gCWIABZpkCS2gBZpkCS2gBZpkCT3ABZpkCS2gBXYgBZZcBZpkCS2gBWYIBWoMBWoQBXYgBXosBX40BYI4BYZABY5MBY5QBZJUBZJYBZZYBZZgBZpkCS2gCS2kCTGkCTGoCTGsCTm4CUHECUXICU3cCVXoCVnsCVnwCVn0CV34CWH8CZ5kDZ5oEaJoHapsJa5wKa50LbJ0NbZ4Obp4Pbp8RcJ8dd6QgeaUheaYieqYmfKgofakpfqksgKotgKsugasxg6xHkLVNlLdOlLhPlbhQlblYmrxcnb1fnr9hoL9kocFppMNqpcNspsRxqcZ0q8d2rMh8sMqCtM2Ht8+bw9ecxNeexdigxtmhx9mmytuoy9y81+TA2ebG3ejL4OrM4OvP4uzQ4+zS5O3U5e7k7/Tw9vn1+fv6/P38/f79/v7////eLhJIAAAASXRSTlMAAAEBAwMGBhMTHR0iIiQkMDA6Oj09RkZHR1RUZGR/f4GBjIyYmJycnp6goKmpsLC9vcLCx8fI3Nzn5+fn6Ojy8vPz9fX6+v7+/HhGNwAAAk9JREFUeNqV0uVX21AcxvHfhrurtGiL6xju0gIFSoE+F23RDbbBYMKUCXPmzJ1J/s6Rm55AaFL5vHrui2+Sc0/ITXSmobqxC+hqrDZkRpMXkdl1UKjLjiRtsaUmuDGVxpK60HwTVJnyQ0lFcgs0tSTTcSd18Eh3khQCC+FFYaDi+cXwqvjoO3Lhg1ySpUOyeuMqPEgnl/A2cA/2BeHnNWhqCydJObitf8KBr9BWTlwqJI8F7iK0pfLgNCT3BNHvVWg7RQfi4bL6RQxewJN4IjLIp7XdD6+34ZGBKLgDfugIpkT5cGZDtAas8HEB2Nx5/vT2eUWRSDp5bwiiT8AtPvbW3/J73t9dwSEdVWoF7z8LLu9wqJIatII/guw+ZA3UqxoofYOsl+AeXBG4X9vnLu1JcxMyteAyH3+vAzj7g+87kJFdK/gI0Su+HwEudhpTDeS7ecL3M8BljKxawR5ED48FVurxL+ihZv+CZqryL6givc2fwKanpD634KZ20JdEIZ3uv4Z20BlCZLT4HliMRJQwC8n6d9EbYIuPlxDd5XsHktkEOlA7AB8N1JIobWoEPhmZSiOuwmGHD+yOCpJEtM/BB3PtEeSSwZbg1RLLIFkeW4QXiyyPDgWUMOc4PBh3spIAOiKoiM0MQ9PwDCsKIoUAPWPzo1A1Os+YPoCOS2ll08s2uLEtT7PWFFIRVmBmk07LuOLbLc5JZi4II3VxZWbGJhwL/YNDVuvQYP+CY4Ixc1kcaYvKqWcK9TlR5EVMlrGmqZux7qYaY1YMuTnhp/+2rus3qLFrygAAAABJRU5ErkJggg==" 
                         alt="<?php _e('Tanaguru on Linkedin', 'wwwtg'); ?>" />
                </a>
                <a href="<?php _e('Slideshare link', 'wwwtg'); ?>" title="<?php _e('Slideshare link title', 'wwwtg'); ?>">
                    <img src="data:image/png;base64,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"
                         alt="<?php _e('Tanaguru on Slideshare', 'wwwtg'); ?>" />
                </a>
                <a href="<?php _e('Ohloh link', 'wwwtg'); ?>" title="<?php _e('Ohloh link title', 'wwwtg'); ?>">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAzCAMAAADmSHsbAAACJVBMVEX////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////Q0dL////V1db+/v7Q0dL////Q0dL////Q0dL////Q0dL////////Q0dLg4OH+/v7////Q0dLQ0dL////Q0dL////Q0dLr6+z+/v7////9/f1kZGZlZmhoaGpqamxra21zc3V8e3yAfoKEg4WMi42TkpSYlpmamZufnp+hkIGtrK+xo5a2qZ24t7q7ur28sKXCtqzDwsXFurDMw7vPuaDQ0dLR0NHSvqfS0dHS09TTz87T0tXT09TU1NXWiDHWiTTXjDbYjzvYxrHY0crY2NjZ0svZ2dnZ2drak0La29zbl0fb2t3b29zcmUrc3N3dnVDd3d/en1PeoVbf2dPf39/f3+Dgp2DhqGPh08Th4eLiq2bi4uPjrmzksXDksnPk39vk4+Xl5Obl5ebnuoDovofo6Onq6uvrxZTs7O3tzKHt7e3t7e/w1K7w7/Dw7/Hx8PDx8fLy8vPy8/P038P09PT148n29fX29vb29vf39/f46tf4+Pj68eT68eX6+vr6+vv8/Pz9+PL9+vX9/fz9/f3++/b++/n+/v7//vz///9N88h7AAAASHRSTlMACwsNDRsbICAkJCcnKSkzMzY2Y2NlZWdnaWl5eX9/gICIiI2Nmpqenp+fpaXBwcvL1tbc3N3d39/m5/Hx9PX5+fr6/Pz8/P4eCJeFAAACzklEQVR42pXRd0PTQBjH8ccJ7r0H7i177zLjAFEBwe2hKJygbBBlKkNFZIMyrLI3ir/X5xGO0DYtjZ9/8rTJN3dJSMd19xn3oDAgLMj9zG5XcmL9YW9Y8T68nhzbeC4KOlHnNpJ9q0/Iy3XJidVkx3Z/OOS/nXT2RmIFkXvJxlE4cZSsHINTx8jCfhiwnzQ7o2BA1E6S1gbCkMC1MjgFg06RamscDIrbqgaXYNglElzjYFicq+4TGPgYvvgPvkSbYeHP+MjI+AxUQ2azGTqb6SCWfeWqT9MQkhRFSYKtg3RBm58WcSn3iQyUJti4QJ6QeriFTiAlQQSlsOFJoXJ6nCPu3J4PVLUvrPQKuGsvCKVYOVWK6/Ohei6KN8A9Eby7cyspKfkhNLEkh7+c8x5IP8WPz2qQoqgsiqXgN+dF0Lzl/JEaXFGuXheHZIsgHqoZzmuhaeQ8XQTCze6hREVJxJJ4mrAXfFwKbgB4oSgJWDJBA1pQAk0F5w9EIDdvGQxQzPJD/4D0WrziKjUotQ1iKERO7znP+QBVfi7nFbAfhJCHnO5z8Z5GIEyXiDHNQeBB583yaVpeiuvqU1Mbc8SxsdcquHb7C1Tm83SgAVIL1zQCloHwDKqGA7Qpa0oGv9JruaoyrdcqSNCCqaxNRD6t0Ix11td2jmFRd0ZGxhCEJjEsbrzVh4jcxBLOyQXcROASXQeD6qJdSLjI+mFIP7tIC7ZEZ0/CgMns6C2kOskK5+DUXCE7SYvWBLDyeTgxX84C1pC0w8SKZ7Gi2WJm2kGafYzljWIFo3mM7SMLboxldsGhrkzG3MjKEcZY2TDsGi4TJ4+QjT0R4t+aQegM1ogTEXtIZ5sfEwraRq323lbABL9tZMeq4ya2ILu6ueNbX9/3jubqbLbAdHwV2bfhrInpmM5uIMfWHfJiVrwOrSMnXHadvhwczlh48OXTu1zI1j91Nbr2dTvSrAAAAABJRU5ErkJggg=="
                         alt="<?php _e('Tanaguru on Ohloh', 'wwwtg'); ?>" />
                </a>
            </p>


        </aside>
    </div><!-- /widget-area -->

    <p id="footer2-1"><?php _e('Tanaguru free software by Open-S', 'wwwtg'); ?></p>
    <p id="footer2-2">
        <a href="<?php _e('Legal link', 'wwwtg'); ?>"><?php _e('Legal text link', 'wwwtg'); ?></a> | 
        <a href="<?php _e('Credits link', 'wwwtg'); ?>"><?php _e('Credits text link', 'wwwtg'); ?></a> |
        <a href="<?php _e('Accessibility link', 'wwwtg'); ?>"><?php _e('Accessibility text link', 'wwwtg'); ?></a>
    </p>
</footer><!-- #colophon -->
</div><!-- #page -->
<!-- DATA_FOOTER -->
<?php wp_footer(); ?>
<!-- /DATA_FOOTER -->
</body>
</html>