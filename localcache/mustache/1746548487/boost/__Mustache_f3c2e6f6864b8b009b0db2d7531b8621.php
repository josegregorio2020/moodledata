<?php

class __Mustache_f3c2e6f6864b8b009b0db2d7531b8621 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="footer-popover bg-white">
';
        $buffer .= $indent . '    <div data-region="footer-container-popover">
';
        $buffer .= $indent . '        <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="footer-content-popover container" data-region="footer-content-popover">
';
        $value = $context->findDot('output.has_popover_links');
        $buffer .= $this->section267f2cc291018d68b496b959c64c73c9($context, $indent, $value);
        $buffer .= $indent . '        <div class="footer-section p-3 border-bottom">
';
        $buffer .= $indent . '            <div class="logininfo">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="footer-section p-3">
';
        $buffer .= $indent . '            <div>';
        $value = $context->find('str');
        $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
        $buffer .= '</div>
';
        $value = $context->findDot('output.moodle_release');
        $buffer .= $this->section73bb8cb2a5e4cb71f2710d52886fa70e($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-light bg-light text-dark">
';
        $buffer .= $indent . '    <div class="footer-container">
';
        $buffer .= $indent . '        <p>© 2025 Todos los Derechos Reservados.</p>
';
        $buffer .= $indent . '        <p>Desarrollado por <strong>Secretari­a de las TIC - Ibague </strong></p>
';
        $buffer .= $indent . '        <div class="footer-social">
';
        $buffer .= $indent . '            <a href="#" target="_blank" aria-label="Facebook">
';
        $buffer .= $indent . '                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '                    <path fill="currentColor" d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 4.97 3.64 9.11 8.38 9.93V14.9h-2.5v-2.83h2.5v-2.16c0-2.48 1.5-3.84 3.73-3.84 1.08 0 2.21.19 2.21.19v2.44h-1.24c-1.22 0-1.6.76-1.6 1.55v1.82h2.72l-.43 2.83h-2.29v7.1c4.74-.82 8.38-4.96 8.38-9.93Z"/>
';
        $buffer .= $indent . '                </svg>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <a href="#" target="_blank" aria-label="Twitter">
';
        $buffer .= $indent . '                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '                    <path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69a4.27 4.27 0 0 0 1.89-2.34 8.59 8.59 0 0 1-2.7 1.04 4.3 4.3 0 0 0-7.32 3.91 12.18 12.18 0 0 1-8.85-4.48 4.3 4.3 0 0 0 1.33 5.74 4.3 4.3 0 0 1-1.95-.54v.05c0 2.05 1.46 3.75 3.4 4.14a4.3 4.3 0 0 1-1.94.07 4.3 4.3 0 0 0 4.01 3 8.63 8.63 0 0 1-5.34 1.84A8.64 8.64 0 0 1 2 19.74a12.15 12.15 0 0 0 6.58 1.93c7.89 0 12.21-6.54 12.21-12.21v-.55A8.58 8.58 0 0 0 22.46 6Z"/>
';
        $buffer .= $indent . '                </svg>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <a href="#" target="_blank" aria-label="Instagram">
';
        $buffer .= $indent . '                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '                    <path fill="currentColor" d="M12 2.16c3.2 0 3.58.01 4.85.07 3.26.15 4.78 1.69 4.93 4.93.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.15 3.26-1.69 4.78-4.93 4.93-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-3.26-.15-4.78-1.69-4.93-4.93-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85c.15-3.26 1.69-4.78 4.93-4.93 1.27-.06 1.65-.07 4.85-.07Zm0-2.16C8.74 0 8.32 0 7.05.06 3.23.22.22 3.23.06 7.05 0 8.32 0 8.74 0 12s0 3.68.06 4.95c.16 3.82 3.17 6.83 7 7 1.27.06 1.69.06 4.95.06s3.68 0 4.95-.06c3.82-.16 6.83-3.17 7-7 .06-1.27.06-1.69.06-4.95s0-3.68-.06-4.95c-.16-3.82-3.17-6.83-7-7C15.68 0 15.26 0 12 0Zm0 5.84a6.16 6.16 0 1 1 0 12.32A6.16 6.16 0 0 1 12 5.84Zm0 10.16a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm6.4-10.88a1.44 1.44 0 1 1 2.88 0 1.44 1.44 0 0 1-2.88 0Z"/>
';
        $buffer .= $indent . '                </svg>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '/* Estilos encapsulados dentro de .footer-content-debugging */
';
        $buffer .= $indent . '.footer-content-debugging {
';
        $buffer .= $indent . '    padding: 20px;
';
        $buffer .= $indent . '    background: #f8f9fa; /* Fondo claro */
';
        $buffer .= $indent . '    color: #3962AE; /* Texto oscuro */
';
        $buffer .= $indent . '    text-align: center;
';
        $buffer .= $indent . '    font-size: 14px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-container {
';
        $buffer .= $indent . '    display: flex;
';
        $buffer .= $indent . '    flex-direction: column;
';
        $buffer .= $indent . '    align-items: center;
';
        $buffer .= $indent . '    gap: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.footer-container p {
';
        $buffer .= $indent . '    color: #3962AE; /* Texto oscuro */
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-social {
';
        $buffer .= $indent . '    display: flex;
';
        $buffer .= $indent . '    gap: 15px;
';
        $buffer .= $indent . '    justify-content: center;
';
        $buffer .= $indent . '    margin-top: 10px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-social a {
';
        $buffer .= $indent . '    color: #3962AE;
';
        $buffer .= $indent . '    width: 24px;
';
        $buffer .= $indent . '    height: 24px;
';
        $buffer .= $indent . '    transition: color 0.3s;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.footer-social a:hover {
';
        $buffer .= $indent . '    color: #007bff; /* Cambio de color en hover */
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '/* ðŸ“± Responsivo */
';
        $buffer .= $indent . '@media (max-width: 768px) {
';
        $buffer .= $indent . '    .footer-content-debugging {
';
        $buffer .= $indent . '        font-size: 12px;
';
        $buffer .= $indent . '        padding: 15px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .footer-social {
';
        $buffer .= $indent . '        justify-content: center;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</footer>
';
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);

        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76730a1d361b59f6efa3392d18acfa6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFdeddc10d5f166c43913b111f7bf7957(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ea107a85e6f3b99491abdb216e5970a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="footer-support-link">{{{ output.supportemail }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section267f2cc291018d68b496b959c64c73c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-section p-3 border-bottom">
                {{# output.page_doc_link }}
                    <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                {{/ output.page_doc_link }}

                {{# output.services_support_link }}
                    <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                {{/ output.services_support_link }}

                {{# output.supportemail }}
                    <div class="footer-support-link">{{{ output.supportemail }}}</div>
                {{/ output.supportemail }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section76730a1d361b59f6efa3392d18acfa6b($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->sectionFdeddc10d5f166c43913b111f7bf7957($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section0ea107a85e6f3b99491abdb216e5970a($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73bb8cb2a5e4cb71f2710d52886fa70e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
