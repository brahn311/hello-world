# Copy shortcuts adding this lines into your Atom config file keymap.cson

# Windows7 & Ubuntu
# -----------------

# Split selection into lines
'atom-text-editor':
  'ctrl-shift-L': 'editor:split-selections-into-lines'
  'ctrl-shift-J': 'grammar-selector:show'

# Fixing emmet conflict ctrl+shift+M doesn't show markdown preview toggle
'.editor:not(.mini)':
  'ctrl-alt-m': 'markdown-preview:toggle'