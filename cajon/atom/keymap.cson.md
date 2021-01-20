# Personal shortcuts
Copy and adding this lines into your Atom config file keymap.cson

### Windows personal shortcuts
```
# Split selection into lines
'atom-text-editor':
  'ctrl-shift-L': 'editor:split-selections-into-lines'
    # modificando el acceso directo y añadiendo la funcion
  'ctrl-shift-J': 'grammar-selector:show'
    # restaurando el acceso directo para la funcion modificada
```
### Linux personal shortcuts
```
# Fixing emmet conflict ctrl+shift+M doesn't show markdown preview toggle
'.editor:not(.mini)':
  'ctrl-alt-m': 'markdown-preview:toggle'
```
