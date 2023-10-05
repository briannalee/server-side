export function toggleElement(elementID: string):boolean {
  let id = document.getElementById(elementID)
  id.style.display = 'inline';
  return true;
}