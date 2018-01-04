<li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" href="{dede:field name='typeurl'/}">{dede:field name='typename'/}</a>
                <ul class="sub-menu">
                {dede:channel type='son' noself='yes'}
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a target="_blank" href="[field:typelink/]">[field:typename/]</a></li>
				{/dede:channel}
                </ul>
            </li>